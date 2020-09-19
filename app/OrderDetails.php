<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    protected $guarded =[];

    public function order()
    {
        return $this->hasMany(Order::class, 'order_id', 'id');
    }

    public function food()
    {
        return $this->belongsTo(FoodDrink::class, 'food_id', 'id');
    }
}
