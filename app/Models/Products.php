<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $fillable = ['name', 'image', 'unit_price', 'promotion_price', 'description', 'type_id'];
}
