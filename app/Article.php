<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // protected $fillable = [];
    // protected $fillable = ['name', 'piece_start_stock', 'piece_min_stock', 'piece_max_stock', 'piece_order_stock', 'piece_weight', 'unit_start_stock', 'unit_min_stock', 'unit_max_stock', 'unit_order_stock', 'unit_weight', 'unit_size', 'location', 'location_maxweight', 'image'];
    protected $fillable = ['name', 'piece_start_stock', 'piece_min_stock', 'piece_max_stock', 'piece_order_stock', 'piece_weight', 'unit_start_stock', 'unit_min_stock', 'unit_max_stock', 'unit_order_stock', 'unit_weight', 'unit_size', 'location', 'location_maxweight', 'image'];
}
