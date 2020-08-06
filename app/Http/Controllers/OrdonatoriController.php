<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdonatoriController extends Controller
{
    public function index(){
        return view('ordonatori.all');
    }
}
