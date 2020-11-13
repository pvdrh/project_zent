<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    // use HasFactory;
    protected $fillable = ['name','slug','status','parent_id','depth','created_at','updated_at'];

    public function products(){
        return $this->hasMany(Product::class);
    }
}
