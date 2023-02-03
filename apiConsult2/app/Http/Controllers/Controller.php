<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function validateConnection(){
        $config = array(
            'driver' => 'pgsql',
            'database' => 'websites1675326969705mtdkhgflnfabkael',
            'host' => 'psql-mock-database-cloud.postgres.database.azure.com',
            'port' => '5432',
            'username' => 'ndcjrbdcsqkcwckgnrxpnbyg@psql-mock-database-cloud',
            'password' => 'gleebataouvueylcurfxtkue',
        );
        
        \Illuminate\Support\Facades\Config::set('database.connections.mysql_dinamico',$config);
        \Illuminate\Support\Facades\DB::connection('mysql_dinamico');
        
        try {
            \Illuminate\Support\Facades\DB::connection('mysql_dinamico')->getPdo();
            echo "Conectado satisfactoriamente: " . \Illuminate\Support\Facades\DB::connection('mysql_dinamico')->getDatabaseName();
        
        } catch (\Exception $e) {
            die("No es posible conectarse a la Base de Datos. Por favor, revise su configuración." );
        }
    }
    
    public function databaseQuery(){
        $products = DB::table('stations')->get();
        // $products = "jaskd";
        return $products;
    }
}
