<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class POSController extends Controller
{
    public function home(){
        return view('hello')
        ->with('name','Kasir Najwa');
        }
}
