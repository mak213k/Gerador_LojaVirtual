<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['title', 'id_category', 'description', 'price','measure', 'image', 'publish_at'];
}
