<?php

namespace App\Http\Controllers\Coordinador;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Convocatoria;

class IntegracionController extends Controller
{
    public function registrados(){
//        $convocatorias=Convocatoria::all()->sortByDesc("Fecha_inicio");
        $convocatorias=Convocatoria::paginate(1);
        return view('integracion/listado',compact('convocatorias'));
    }
}
