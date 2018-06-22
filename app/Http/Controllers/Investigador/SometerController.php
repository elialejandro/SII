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
use App\Models\Colaboradores;
use App\Models\User;

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
/*
        $validacion = array(
            'convocatoria' => array('rubro' => "rubro" ,'resultado' => "resultado", 'mensaje' => "mensaje", ) , 
            'rubro' => array('rubro' => "rubro" ,'resultado' => "resultado", 'mensaje' => "mensaje", ) , 

            );
*/
        $puede = true;

        $proyecto= Proyecto::find($idproy);

//0.Convocatoria en tiempo
        $ConvocatoriaFechaInicio = new \DateTime($proyecto->Convocatoria->Fecha_inicio);
        $ConvocatoriaFechaFin  = new \DateTime($proyecto->Convocatoria->Fecha_fin);
        $fechaSometido = new \DateTime(); // Today
        $fechaSometido->format('d/m/Y'); // echos today! 

        $validacion["convocatoria"]["categoria"] = "Convocatoria";
        if(
          $fechaSometido->getTimestamp() > $ConvocatoriaFechaInicio->getTimestamp() && 
          $fechaSometido->getTimestamp() < $ConvocatoriaFechaFin->getTimestamp() ) {
            $validacion["convocatoria"]["resultado"] = "alert-success";
            $validacion["convocatoria"]["mensaje"] = "En tiempo ()";
        }else{
            $validacion["convocatoria"]["resultado"] = "alert-danger";
            $validacion["convocatoria"]["mensaje"] = "Sometido fuera del tiempo de la convocatoria";
            $puede = false;
        }

//1. Protocolo
/*
////protocolo
resumen, introduccion, antecedentes, hipotesis, marco_teorico, 
metas, objetivo_general, objetivos_especificos, impacto_beneficio, 
metodologia, referencias, lugar, infraestrucutura
*/

//2. Colaboradores
    $Colaboradores = $proyecto->Colaboradores;
    $validacion["Colaboradores"]["categoria"] = "Colaboradores:";
    $todos=true;
    $acep="<ul>";
    foreach($Colaboradores as $colaborador){
        $quien = $colaborador->quien;
        if ( $colaborador->participacion == null){
            $acep .= "<li>$quien->name aún no acepta</li>";
            $todos=false;
        }else{
            $acep .= "<li>$quien->name ya acepto</li>";
        }
    }
    $acep .= "</ul>";
    if($todos) {
        $validacion["Colaboradores"]["resultado"] = "alert-success ";
        $validacion["Colaboradores"]["mensaje"] = $acep;
    }else{
        $validacion["Colaboradores"]["resultado"] = "alert-danger";
        $validacion["Colaboradores"]["mensaje"] = $acep;
        $puede = false;
    }    

//3. Entregables
//4. Cronograma
//5. Presupuesto (financiado)
        return view('someter/someter',compact('proyecto','validacion','puede'));
    }

    public function update(Request $request, $idproy)
    {
        $fechaSometido = new \DateTime(); // Today
        $proyecto= Proyecto::find($idproy);
        $proyecto->sometido = $fechaSometido->format('Y-m-d');
        $proyecto->save();
//        return view('protocolo/show',compact('proyecto','protocolo'));
       return redirect('home')->with('success', "El proyecto \"$proyecto->titulo\" ha sido sometido en fecha \"$proyecto->sometido\".");
        //return redirect()->back()->with('success', 'Information del protocolo ha sido actualizada');
    }

    


}
