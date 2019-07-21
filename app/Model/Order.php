<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected $fillable = [
    'description', 'status', 'installments_quantity', 'total', 'total_discount', 'user_id', 'payment_form_id'
  ];
}

