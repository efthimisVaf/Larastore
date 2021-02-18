<?php

namespace App\Models;

use App\Http\Controllers\CategoryController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description','price','vat_tariff_id','category_id'];

    protected $hidden = ['created_at','updated_at','category_id'];


    public function vatTariff()
    {
        return $this->belongsTo('App\Models\VatTariff');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function orders(){
        return $this->belongsToMany('App\Models\Order');
    }




}
