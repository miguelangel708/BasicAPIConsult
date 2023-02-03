<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;
use \App\Models\visit;
use \App\Models\migration;

class queryController extends Controller
{
    public function visitsQuery(){
        return visit::all();
        // return migration::all();
        // $products = DB::table('flood')->get();
        // return $products;
    }
    public function migrationQuery(){
        return migration::all();
    }
}
