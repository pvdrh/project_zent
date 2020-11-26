<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Order extends Model
{
    protected $table = 'order';
    public function products(){
        return $this->belongsToMany(Product::class);
    }
}
