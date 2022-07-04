<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $fillable = ['nome', 'regiao'];

    public function cidade(){
        return $this->hasMany('App\Cidade');
    }
}
