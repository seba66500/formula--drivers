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
        $drivers = DB::select('SELECT * FROM drivers ORDER BY id ASC');
        return view('drivers', ['drivers' => $drivers]);
    }

    public function standings(){
        $standings = DB::select("SELECT concat(drivers.name, ' ',  drivers.last_name) AS name, driver_id, (bahrain + saudi_arabia + australia + italy + miami + spain) AS points, bahrain, saudi_arabia, australia, italy, miami, spain 
        FROM standings 
        INNER JOIN drivers ON drivers.id=standings.driver_id
        ORDER BY points DESC");
        return view('standings', ['standings' => $standings]);
    }

    public function penalty(){
        $penalty = DB::select("SELECT concat(drivers.name, ' ', drivers.last_name) AS name, driver_id, description, penalty_points, date
        FROM penalty
        INNER JOIN drivers ON drivers.id=penalty.driver_id
        ORDER BY date DESC");
        return view('penalty', ['penalty' => $penalty]);
    }

    public function reprimends(){
        $reprimends = DB::select("SELECT concat(drivers.name, ' ', drivers.last_name) AS name, driver_id, description, type, season
        FROM reprimend
        INNER JOIN drivers ON drivers.id=reprimend.driver_id
        WHERE season = '2022'
        ORDER BY driver_id DESC");
        return view('reprimends', ['reprimends' => $reprimends]);
    }

    public function contracts(){
        $contracts = DB::select("SELECT concat(name, ' ', last_name) AS name, team
        FROM drivers 
        WHERE contract_expire = '2022'
        ORDER BY id ASC");
        return view('contracts', ['contracts' => $contracts]);
    }

}