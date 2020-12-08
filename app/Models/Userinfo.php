<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Userinfo extends Model
{
    use HasFactory;
    protected $table = 'user_info';

    public function user(){
        return $this->hasOne(User::class);
    }
}
