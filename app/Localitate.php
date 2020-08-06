<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Localitate extends Model
{
    protected $table = 'localitati';
    public $timestamps = false;

    public function afisareJudet(){
        return $this->belongsTo('App\Judet', 'judet');
    }
}
