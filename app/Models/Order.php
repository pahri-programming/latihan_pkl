<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\User;

class Order extends Model
{
    
    protected $fillable = ['user_id', 'order_code', 'total_price', 'status'];

   
    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('qty', 'price')->withTimestamps();
    }

    // Fixed 'belongTo' to 'belongsTo'
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
