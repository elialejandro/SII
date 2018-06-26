<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Protocolo;
use App\Models\Entregables;
use App\Models\Vinculacion;


use PDF;

class DocumentosController extends Controller
{
    public function cr01($idproy)
    {
      $entregablesa = Entregables::where('tipo',"ACADEMICO")->where('proyecto_id', $idproy)->get();
      $entregablesh = Entregables::where('tipo',"HUMANO")->where('proyecto_id', $idproy)->get();
      $protocolo= Protocolo::find($idproy);
      $pdf = PDF::loadView('documentos.cr01',compact('protocolo','entregablesa','entregablesh'));
      return  $pdf->download('Protocolo.pdf');
    }
    public function cr02($idproy)
    {
      $entregablesa = Entregables::where('tipo',"ACADEMICO")->where('proyecto_id', $idproy)->get();
      $entregablesh = Entregables::where('tipo',"HUMANO")->where('proyecto_id', $idproy)->get();
      $protocolo= Protocolo::find($idproy);
      $pdf = PDF::loadView('documentos.cr01',compact('protocolo','entregablesa','entregablesh'));
      return  $pdf->download('Protocolo.pdf');
    }
    public function vinculacion($idproy){
        $vinculacion= Vinculacion::find($idproy);
        if(  $vinculacion->vinculacion == "") return;
        $path = public_path() . '/evidencias/' . $vinculacion->vinculacion;
        //return Storage::download($path);
        return response()->download($path);
    }


}
