<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $felliable = ['user_id','order_code','total_price','status'];

    public function products()
    {
        return $this->belongToMany(Product::clas)->withPivot('qty','price')->withTimestamps();
    }

    public function user()
    {
        return $this->belongTo(User::class);
    }
}
