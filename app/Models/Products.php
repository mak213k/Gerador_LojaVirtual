<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //protected $table = 'products';
    protected $fillable = ['title', 'description', 'price','measure', 'publish_at'];
}
