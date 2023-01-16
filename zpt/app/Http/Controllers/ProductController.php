<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Log;
use App\Models\Sale;

class ProductController extends Controller
{
    public $search = false;

    public function index(Request $request)
    {
        $this->search = (isset($request->query()['key'])) ? $request->query()['key'] : false;
        
        if ($this->search) {
            $response = Product::where(function($query){
                $query->where('name', 'like', "%".str_replace(' ', '%', $this->search)."%")
                ->orWhere('name_abrev', 'like', "%".str_replace(' ', '%', $this->search)."%")
                ->orWhere('ean', 'like', "%".str_replace(' ', '%', $this->search)."%");
            })->paginate(10);
        } else {
            $response = Product::paginate(10);
        }

        $data = $response;

        return view('product.index', compact('data'));
    }


    public function action(Request $request, Product $product, $option = null, $id = null)
    {
        $response = [];
        $data = [];
        $options = ['report', 'form', 'sale', 'historic'];

        if (in_array($option, $options)) {

            $response = $this->$option($request, $product, $id);

            if (isset($response['success'])) {

                $status = array_values($response);
                $alert = ($status[0]) ? 'success' : 'error';
                return redirect()->route('product')->with($alert, $response['message']);

            }

            $data = (count($response) == 1) ? $response->all() : $response;

        } else {

            $option = 'index';

        }

        return view("product.{$option}", compact('data', 'option', 'id'));
    }


    public function form($request, $product, $id = null)
    {

        $data = [];

        if ($request->method() == 'POST') {
            $data = ($id) ? $product->edit($request) : $product->register($request);
        } elseif ($request->method() == 'GET' && $id) {
            $data = $product->where('id', $id)->get();
        }

        return $data;
    }

    public function sale($request, $product, $id = null)
    {
        if ($request->method() == 'POST') {
            $sale = new Sale();
            return $sale->register($request->all());
        }

        return $product->where('id', $id)->get();
    }
    
    public function report($request, $product, $id = null)
    {
        $this->search = (isset($request->query()['key'])) ? $request->query()['key'] : false;
        
        if ($id == 1) { # Vendedores
            return $product->reportSellers($this->search);

        } elseif ($id == 2) { # Produtos
            return $product->report($this->search);

        } else {
            return redirect()->route('product')->with('error', 'Página não localizada!');

        }
    }
    
    public function historic($request, $product, $id = null)
    {
        return $product->getLogs();
    }
}
