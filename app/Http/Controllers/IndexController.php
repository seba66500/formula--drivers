<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('index');
    }

    public function drivers(){
        return view('drivers');
    }

    public function standings(){
        return view('standings');
    }

    public function penalty(){
        return view('penalty');
    }

    public function reprimends(){
        return view('reprimends');
    }

}