<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
      return view('layouts.home');
    }
    public function about(){
      return view('layouts.about');
    }
}
