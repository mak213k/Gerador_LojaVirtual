<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//use App\Enums\ProvidersEnum;

class Purchase extends Model
{
    protected $table = 'purchase';
    protected $fillable = ['provider', 'date_purchase','cost_price_total'];
    //protected $casts = [ 'providers' => ProvidersEnum::class ];
}
