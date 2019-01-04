<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $table = 'price';
    protected $fillable=[
        'id',
        's_id',
        'v_id',
        'price',
    ];

    public function vegetables(){
        return $this->hasMany(vegetables::class);
    }

    public function shops(){
        return $this->hasMany(shops::class);
    }
}
