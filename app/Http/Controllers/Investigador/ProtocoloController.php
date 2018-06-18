<?php

namespace App\Http\Controllers\Investigador;

use App\Http\Controllers\Controller;


use Illuminate\Http\Request;

//use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\Auth;


use App\Models\Proyecto;
use App\Models\Protocolo;
//use App\Models\User;

class ProtocoloController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function mostar($idproy)
    {
        $protocolo= Protocolo::find($idproy);
        $proyecto= Proyecto::find($idproy);
        return view('protocolo/show',compact('proyecto','protocolo'));
    }

    public function update(Request $request, $idproy)
    {
        $protocolo= Protocolo::find($idproy);
        $protocolo->fill($request->all());
        $protocolo->save();
        $proyecto= Proyecto::find($idproy);
        return view('protocolo/show',compact('proyecto','protocolo'));
//        return redirect('home')->with('success', 'Information del protocolo ha sido actualizada');
        //return redirect()->back()->with('success', 'Information del protocolo ha sido actualizada');
    }

}
