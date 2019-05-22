<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
         'name','user_id'
    ];//データの書き換えを許可する
}


