<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Proyecto;

use App\Models\Convocatoria;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        if ($request->input('page')) $hayg=true;
        else $hayg = false;
        if (\Session::has('page')) $hays=true;
        else $hays = false;

        if( $hayg == false && $hays == false ){
            $page=true;
        }
        if( $hayg == false && $hays == true  ){
            $page = \Session::get('page');
        }
        if( $hayg == true  && $hays == false ){
            $page=$request->input('page');
            \Session::put('page' ,  $request->input('page') ); 
        }
        if( $hayg == true  && $hays == true  ){
            $page=$request->input('page');
            \Session::put('page' ,  $request->input('page') ); 
        }
        $request->merge( array( 'page' => $page ) );

        $logeado = Auth::user();

        
        switch ($logeado->rol) {
            case 'Investigador':
                $convocatorias=Convocatoria::paginate(2);
                $convocatorias->currentPage($page);
                return view('sistema.Investigador',compact('convocatorias'));
                break;
            case 'Coordinador':
                $count = User::all()->count();
                // $ci    = User::where('rol','Investigador')->count();
                //   $cii    = User::where('rol','Coordinador')->count();
//                $countproyect = Proyecto::all()->count();
//                $catalogo = Catalago::all()->count();
//                $entregable = Entregable::all()->count();
                return view('sistema.Coordinador',compact('count'));

                break;
//            default:
//                return view('sistema.home');
//                break;
        }
    }
}
