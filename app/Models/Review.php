<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public $felliable = ['user_id','point','comment','produk_id'];

    public function user(){
        return $this->belongTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
