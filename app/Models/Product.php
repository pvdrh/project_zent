<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Models\Image;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactor;
    protected $fillable = ['name','slug','status','content','discount_price', 'category_id','created_at','updated_at', 'origin_price', 'sale_price', 'content', 'user_id'];
    public function orders(){
        $this->belongsToMany(Order::class);
    }
}
