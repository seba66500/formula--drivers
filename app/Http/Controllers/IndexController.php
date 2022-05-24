<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index(){
        return view('index');
    }

    public function drivers(){
        $drivers = DB::select('select * from drivers order by contract_expire ASC');
        return view('drivers', ['drivers' => $drivers]);
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