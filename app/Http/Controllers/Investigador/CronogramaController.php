<?php

namespace App\Http\Controllers\Investigador;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


use App\Models\Proyecto;
use App\Models\Cronograma;



class CronogramaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($idproy)
    {
        $proyecto= Proyecto::find($idproy);
        $opciones   = DB::table('entregables')
            ->where('proyecto_id',$idproy)
            ->get();

        $actividades =Cronograma::orderBy('fecha_inicio','ASC')
                        ->orderBy('fecha_fin','ASC')
                        ->where('proyecto_id',$idproy)
                        ->get();
//       $actividades = Cronograma::all()
//                   ->where('proyecto_id',$idproy);
//                   ->orderBy('fecha_inicio','asc');

        return view('cronograma/index',compact('actividades','proyecto','opciones'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function agregar(Request $request)
    {

//    <!--   id, actividad, fecha_inicio, fecha_fin, monto, proyecto_id, entregables_id  -->

        $Cronograma  = new Cronograma();
        $Cronograma->actividad=$request->input('actividad');
        $Cronograma->fecha_inicio=$request->input('fecha_inicio');
        $Cronograma->fecha_fin=$request->input('fecha_fin');
         
        $Cronograma->proyecto_id=$request->input('proyecto_id');
        if($request->input('entregables_id')!="")
            $Cronograma->entregables_id=$request->input('entregables_id');
        $Cronograma->save();

        $Retornar=$Cronograma;
        return response()->json($Retornar);
    }


    public function eliminar(Request $request)
    {
        $Cronograma = Cronograma::find( $request->input('actividad_id') );
        $Cronograma->delete();
        $arrayName = array('id' =>  $request->input('actividad_id') );
        return response()->json( $arrayName );                         
    }

}
