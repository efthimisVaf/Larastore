<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['category_name'];

    protected $hidden = ['created_at','updated_at'];

    public function products(){
        return $this->hasMany('App\Models\Product');
    }

    public function setName($value){
         $this->attributes['category_name'] = $value;
    }

}
