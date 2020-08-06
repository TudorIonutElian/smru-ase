<?php

namespace App\Http\Controllers;

use App\TipOrdonator;
use Illuminate\Http\Request;

class TipOrdonatoriController extends Controller
{
    public function index(){
        return $tipOrdonatori = TipOrdonator::all();
    }
}
