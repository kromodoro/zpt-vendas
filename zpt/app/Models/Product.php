<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\Models\Sale;

class Product extends Model
{

    public $timestamps = true;
    public $search = false;

    public function register($request)
    {
        
        DB::beginTransaction();

        $data = $request->all();
        unset($data['_token']);
        unset($data['id']);

        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        $product_id = $this->insertGetId($data);

        if ($product_id) {

            DB::commit();

            auth()->user()->log()->create([
                'user_id' => auth()->user()->id,
                'description' => 'Registrou o Produto',
                'product_id' => $product_id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
            
            return ['success' => true, 'message' => 'Produto registrado!'];

        } else {

            DB::rollback();

            return ['success' => false, 'message' => 'Falha ao tentar registrar o produto!'];
        }

    }

    public function edit($request)
    {
        DB::beginTransaction();

        $data = $request->all();
        unset($data['_token']);

        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        $product = $this->where('id', $data['id'])->update($data);

        if ($product) {

            DB::commit();

            auth()->user()->log()->create([
                'user_id' => auth()->user()->id,
                'description' => 'Atualizou o Produto',
                'product_id' => $data['id'],
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
            
            return ['success' => true, 'message' => 'Produto atualizado!'];
        
        } else {

            DB::rollback();

            return ['success' => false, 'message' => 'Falha ao tentar atualizar o produto!'];
        }

    }

    public function report($search)
    {
        if ($search) {

            $this->search = $search;

            return DB::table('sales')
            ->join('products', 'sales.product_id', '=', 'products.id')
            ->select(DB::raw('products.name, products.name_abrev, products.ean, count(*) as total'))
            ->orWhere(function($query){
                $query->where('products.name', 'like', "%".$this->search."%")
                ->orWhere('products.name_abrev', 'like', "%".$this->search."%")
                ->orWhere('products.ean', 'like', "%".$this->search."%");
            })
            ->groupBy('products.id')
            ->orderBy('total', 'DESC')
            ->paginate(10);

        }

        return DB::table('sales')
        ->join('products', 'sales.product_id', '=', 'products.id')
        ->select(DB::raw('products.name, products.name_abrev, products.ean, count(*) as total'))
        ->groupBy('products.id')
        ->orderBy('total', 'DESC')
        ->paginate(10);
    }

    public function reportSellers($search)
    {
        if ($search) {

            $this->search = $search;

            return DB::table('sales')
            ->join('users', 'sales.user_id', '=', 'users.id')
            ->select(DB::raw('users.name, count(*) as total'))
            ->where('users.name', 'like', "%".$this->search."%")
            ->groupBy('users.id')
            ->orderBy('total', 'DESC')
            ->paginate(10);

        }

        return DB::table('sales')
        ->join('users', 'sales.user_id', '=', 'users.id')
        ->select(DB::raw('users.name, count(*) as total'))
        ->groupBy('users.id')
        ->orderBy('total', 'DESC')
        ->paginate(10);
    }

    public function getLogs()
    {
        return DB::table('logs')
        ->join('users', 'logs.user_id', '=', 'users.id')
        ->join('products', 'logs.product_id', '=', 'products.id')
        ->select(DB::raw("users.name as usuario, products.name as produto, logs.description, DATE_FORMAT(logs.created_at, '%d/%m/%Y %H:%i:%s') as created_at"))
        ->orderBy('created_at', 'ASC')
        ->paginate(10);
    }
}
