<?php

namespace App\Http\Controllers\Investigador;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


use App\Models\Proyecto;
use App\Models\Convocatoria;
use App\Models\User;

class ProyectoController extends Controller
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
    public function index()
    {
        $proyectos=Proyecto::all();
        return view('proyecto/index',compact('proyectos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ies = DB::table('catalogo_ies')->get();
        $pes = DB::table('catalogo_pe')->get();
        $areas = DB::table('catalogo_areas')->get();
        $lineas = DB::table('catalogo_lineas')->get();
        $hoy = date("Y-m-d");
        $convocatorias = DB::table('convocatoria')
                    ->whereraw("'$hoy' BETWEEN Fecha_inicio AND Fecha_fin")
                    ->get();
        $tipos = DB::table('catalogo_tipo_investigacion')->get();
        return view('proyecto/create',compact('convocatorias','ies','pes','areas','lineas','tipos'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $logeado = Auth::user();
/*
        $proyecto= new Proyecto();
        $proyecto->titulo_proyecto=$request->get('titulo');
        $proyecto->fecha_elaboracion = date("Y-m-d");
        $proyecto->responsable=$logeado->id;
        $proyecto->convocatoria_id = $request->get('id_conv');
        $proyecto->save();        
*/

        $parametros=$request->all();
        $parametros['responsable']=$logeado->id;
        Proyecto::create($parametros);
        return redirect('home')->with('success', 'Information ha sido agregada');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sespecial(Request $request)
    {

        // $logeado = Auth::user();
        // $proyecto= new Proyecto();
        // $proyecto->titulo_proyecto=$request->get('titulo');
        // $proyecto->fecha_elaboracion = date("Y-m-d");
        // $proyecto->responsable=$request->get('director');
        // $proyecto->convocatoria_id = $request->get('id_conv');
        // $proyecto->save();
        Proyecto::create($request->all());
        return redirect('home')->with('success', 'Information ha sido agregada');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function especial()
    {
        $ies = DB::table('catalogo_ies')->get();
        $pes = DB::table('catalogo_pe')->get();
        $areas = DB::table('catalogo_areas')->get();
        $lineas = DB::table('catalogo_lineas')->get();
        $tipos = DB::table('catalogo_tipo_investigacion')->get();
        $hoy = date("Y-m-d");
        $convocatorias = DB::table('convocatoria')
                    ->whereraw("'$hoy' BETWEEN Fecha_inicio AND Fecha_fin")
                    ->get();
        $investigadores = DB::table('users')
                    ->where('rol', 'Investigador')
                    ->get();
        return view('proyecto/createespecial',compact('convocatorias','investigadores','ies','pes','areas','lineas','tipos'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proyecto = Proyecto::find($id);
//        $Datos = Datos::find($id);
        $convocatoria = $proyecto->convocatoria->Nombre;
        return view('proyecto/edit',compact('proyecto','id','convocatoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $proyecto= Proyecto::find($id);
        $proyecto->titulo_proyecto=$request->get('titulo');
        $proyecto->save();
        return redirect('home')->with('success', 'Information ha sido actualizada');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $proyecto= Proyecto::find($id);  
            if ($proyecto != null){
                $proyecto->delete();
                return redirect('home')->with('success','Informacion ha sido borrada');
            }else{
                return redirect('home')->with('error','Proyecto no encontrado');
            }

        }catch (\Illuminate\Database\QueryException $e){
            if($e->getCode()==23000) return redirect('home')->with('error', 'El proyecto tiene al menos un colaborador');;
        }
    }
}
