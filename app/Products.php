<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'product_name',
        'product_price',
        'product_qty',
        'product_measurement',
        'product_description',
        'supplier_name'
    ];
}
