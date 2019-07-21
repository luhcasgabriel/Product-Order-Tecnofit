<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = [
    'name', 'value', 'description', 'discount', 'status', 'genre', 'category_product_id'
  ];
}

