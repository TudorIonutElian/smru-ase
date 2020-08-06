<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regiune extends Model
{
    protected $table = 'regiuni';
    public $timestamps = false;

    public function afisareJudete(){
        return $this->hasMany('App\Judet', 'regiune', 'id');
    }
}
