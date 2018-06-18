<?php

namespace App\Http\Controllers\Investigador;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


use App\Models\Proyecto;
use App\Models\Cronograma;

use App\Models\Gastos;



class GastosController extends Controller
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
//                        var_dump($actividades);

        $opciones = DB::table('catalogo_gastos')
//                  ->select('partida','descripcion')
                    ->get();
        return view('gastos/index',compact('actividades','proyecto','opciones'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function agregar(Request $request)
    {

//id, descripcion, partida, monto, cronograma_id, proyecto_id

        $Gastos  = new Gastos();
        $Gastos->descripcion=$request->input('descripcion');
        $Gastos->partida=$request->input('partida');
        $Gastos->monto=$request->input('monto');
        $Gastos->cronograma_id=$request->input('cronograma_id');
        $Gastos->proyecto_id=$request->input('proyecto_id');
        $Gastos->save();
        $Retornar=$Gastos;
        return response()->json($Retornar);
    }


    public function eliminar(Request $request)
    {
        $Cronograma = Gastos::find( $request->input('gasto_id') );
        $Cronograma->delete();
        $arrayName = array('id' =>  $request->input('gasto_id'),  'actividad_id' =>  $request->input('actividad_id') );
        return response()->json( $arrayName );                         
    }

}
