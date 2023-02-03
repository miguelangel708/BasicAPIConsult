<?php

namespace App\Http\Controllers\ConsultControllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ConsultControllers extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function saludo(){
        return("Hola mundo");
    }
}
