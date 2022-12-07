<?php

namespace App\Enums;

//use Illuminate\Database\Eloquent\Model;

enum ProvidsEnum: string
{
    case Petz = 'Petz';
    case PetLove = 'PetLove';
    case PetshopOnline = 'PetshopOnline';
    case Amazon = 'Amazon';

    public function showProvidersEnum(){
        return Array(ProvidsEnum::Amazon, 
        ProvidsEnum::PetLove, 
        ProvidsEnum::PetshopOnline,
        ProvidsEnum::Petz
        );
    }
}
