<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';
    protected $fillable = ['title','description', 
    'label_name', 'label_email', 
    'label_text', 'label_btn_send', 
    'label_btn_clean', 'name_corp', 
    'address_corp', 'city_country_corp', 
    'phone_corp','publish_at' ];

    
}
