<?php

namespace App\Http\Controllers\Investigador;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


use Illuminate\Http\UploadedFile;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

//use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\Auth;


use App\Models\Proyecto;
use App\Models\Convocatoria;

use App\Models\Vinculacion;
//use App\Models\User;

class SometerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function someter($idproy)
    {
        $validacion = array(
            'convocatoria' => array('resultado' => "resultado", 'mensaje' => "mensaje", ) , 
            'rubro' => array('resultado' => "resultado", 'mensaje' => "mensaje", ) , 

            );

        $proyecto= Proyecto::find($idproy);

//0.Convocatoria en tiempo
        $paymentDate = new \DateTime(); // Today
        $paymentDate->format('d/m/Y'); // echos today! 

        $contractDateBegin = new \DateTime($proyecto->Convocatoria->Fecha_inicio);
        $contractDateEnd  = new \DateTime($proyecto->Convocatoria->Fecha_fin);
        $validacion["convocatoria"]["rubro"] = "convocatoria";

        if(
          $paymentDate->getTimestamp() > $contractDateBegin->getTimestamp() && 
          $paymentDate->getTimestamp() < $contractDateEnd->getTimestamp() ) {
            $validacion["convocatoria"]["resultado"] = true;
            $validacion["convocatoria"]["mensaje"] = "En tiempo ()";
        }else{
            $validacion["convocatoria"]["resultado"] = false;
            $validacion["convocatoria"]["mensaje"] = "Sometido fuera del tiempo de la convocatoria";
        }

//1. Protocolo
/*
////protocolo
resumen, introduccion, antecedentes, hipotesis, marco_teorico, 
metas, objetivo_general, objetivos_especificos, impacto_beneficio, 
metodologia, referencias, lugar, infraestrucutura
*/


//2. Colaboradores
//3. Entregables
//4. Cronograma
//5. Presupuesto (financiado)
        return view('someter/someter',compact('proyecto','validacion'));
    }
    
    public function update(Request $request, $idproy)
    {
//        return redirect('home')->with('success', 'Information del protocolo ha sido actualizada');
        //return redirect()->back()->with('success', 'Information del protocolo ha sido actualizada');
    }

}
