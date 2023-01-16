<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    public $fillable = [
        'user_id', 
        'description', 
        'product_id', 
        'created_at', 
        'updated_at'
    ];
}
