<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JudeteController extends Controller
{
    public function index(){
        return view('judete.index');
    }
}
