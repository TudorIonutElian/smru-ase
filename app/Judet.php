<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Judet extends Model
{
    protected $table = 'judete';
    public $timestamps = false;

    public function afisareRegiune(){
        return $this->belongsTo('App\Regiune', 'regiune');
    }

    public function afisareLocalitati(){
        return $this->hasMany('App\Localitate', 'judet', 'id')  ;
    }
}
