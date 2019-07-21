<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_product extends Model
{
  protected $fillable = [
    'quantity', 'unitary_value', 'total', 'discount', 'product_id', 'order_id'
  ];


}
