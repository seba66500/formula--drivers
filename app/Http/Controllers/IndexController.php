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
        $standings = DB::select("select concat(drivers.name, ' ',  drivers.last_name) as name, driver_id, (bahrain + saudi_arabia + australia + italy + miami + spain) as points, bahrain, saudi_arabia, australia, italy, miami, spain 
        from standings 
        inner join drivers on drivers.id=standings.driver_id
        order by points desc");
        return view('standings', ['standings' => $standings]);
    }

    public function penalty(){
        return view('penalty');
    }

    public function reprimends(){
        return view('reprimends');
    }

}