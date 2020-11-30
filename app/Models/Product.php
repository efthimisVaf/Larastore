<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description','price','vat_tariff_id','category_id'];

    protected $hidden = ['created_at','updated_at','vat_tariff_id','category_id'];


    public function VatTariff()
    {
        return $this->belongsTo('App\Models\VatTariff');
    }

    public function Category()
    {
        return $this->belongsTo('App\Models\Category');
    }




}
