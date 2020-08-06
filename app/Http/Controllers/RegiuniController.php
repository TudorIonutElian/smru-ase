<?php

namespace App\Http\Controllers;

use App\Http\Resources\Regiuni;
use App\Http\Resources\Judete;
use App\Http\Resources\Localitati;
use App\Judet;
use App\Localitate;
use App\Regiune;
use Illuminate\Http\Request;

class RegiuniController extends Controller
{
    public function data(){
        return [
            'regiuni'=> Regiuni::collection(Regiune::all()),
            'judete'=>  Judete::collection(Judet::all()),
            'localitati'=> Localitati::collection(Localitate::all())
        ];
        //return Regiuni::collection(Regiune::all());
    }
}
