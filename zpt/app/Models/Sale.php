<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Sale extends Model
{
    public function register($request)
    {

        DB::beginTransaction();

        unset($request['_token']);
        unset($request['name']);
        unset($request['ean']);

        $data = [
            'user_id' => auth()->user()->id,
            'product_id' => $request['id'],
            'value' => $request['value'],
            'rebate' => $request['rebate'],
            'rebate_percent' => $request['rebate_percent'] ?? null,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        $sale_id = $this->insertGetId($data);

        if ($sale_id) {

            DB::commit();

            auth()->user()->log()->create([
                'user_id' => auth()->user()->id,
                'description' => 'Vendeu o Produto',
                'product_id' => $request['id'],
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
            
            return ['success' => true, 'message' => 'Venda registrada!'];

        } else {

            DB::rollback();

            return ['success' => false, 'message' => 'Falha ao tentar registrar a venda!'];
        }

    }
}
