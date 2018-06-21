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
        $proyecto= Proyecto::find($idproy);
        return view('someter/someter',compact('proyecto'));
    }
    
    public function update(Request $request, $idproy)
    {
//        return redirect('home')->with('success', 'Information del protocolo ha sido actualizada');
        //return redirect()->back()->with('success', 'Information del protocolo ha sido actualizada');
    }

}
