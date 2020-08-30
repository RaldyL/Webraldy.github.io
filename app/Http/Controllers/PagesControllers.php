<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesControllers extends Controller
{
    public function Home(){
        return view('index');
    }
    public function About(){
        return view('about');
    }
    
}
