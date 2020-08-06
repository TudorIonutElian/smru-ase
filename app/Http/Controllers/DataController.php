<?php

namespace App\Http\Controllers;

use App\Http\Resources\Judete;
use App\Http\Resources\Regiuni;
use App\Http\Resources\Localitati;
use App\Judet;
use App\Regiune;
use App\Localitate;
use App\TipOrdonator;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function getOrdonatoriTip(){
        return TipOrdonator::all();
    }

    public function getRegiuni(){
         return Regiuni::collection(Regiune::all());
    }

    public function getJudete($regiune){
        return Judete::collection(Judet::where('regiune', '=', $regiune)->get());
    }
    public function getLocalitati($localitate){
        return Localitati::collection(Localitate::where('judet', '=', $localitate)->get());
    }
}
