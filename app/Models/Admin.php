<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'admin';
    protected $fillable = ['title','description' ];

    
}
