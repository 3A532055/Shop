<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vegetable extends Model
{
    protected $table = 'vegetables';
    protected $fillable=[
        'id',
        'name',
    ];
}
