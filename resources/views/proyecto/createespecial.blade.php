@extends('layouts.app')
@section('content')
    <div class="container">
      <h2>Información básica del proyecto</h2><br/>
      <form method="post" action="{{url('proyectoespecial')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="form-group col-md-12">
            <label for="nombre_ies">Convocatoria:</label>
              <select name="convocatoria_id">
               @foreach($convocatorias as $convocatoria)
                 <option value="{{$convocatoria->id}}"> {{ $convocatoria->Nombre }} </option>
               @endforeach
              </select>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-12">
            <label for="titulo">Titulo:</label>
            <input type="text" class="form-control" name="titulo">
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-12">
            <label for="nombre_ies">Nombre de la Institución:</label>
              <select name="nombre_ies">
               @foreach($ies as $ie)
                 <option > {{ $ie->ies }} </option>
               @endforeach
              </select>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-12">
            <!-- <label for="pe">Programa Educativo:</label> -->
             Programa Educativo:
              <select name="pe">
               @foreach($pes as $pe)
                 <option value="{{$pe->id}}"> {{$pe->programa}} </option>
               @endforeach
              </select>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-12">
            <label for="area">Area de estudios:</label>
              <select name="area">
               @foreach($areas as $area)
                 <option> {{ $area->area }} </option>
               @endforeach
              </select>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-12">
            <label for="linea">Linea de Investigación:</label>
              <select name="linea">
               @foreach($lineas as $linea)
                 <option > {{ $linea->linea }} </option>
               @endforeach
              </select>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-6">
            <label for="fecha_inicio">Fecha de inicio:</label>
            <input type="date" class="form-control" name="fecha_inicio">
          </div>
          <div class="form-group col-md-6">
            <label for="fecha_fin">Fecha de fin:</label>
            <input type="date" class="form-control" name="fecha_fin">
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-12">
            <label for="responsable">Director:</label>
              <select name="responsable">
               @foreach($investigadores as $investigador)
                 <option value="{{$investigador->id}}"> {{ $investigador->name }} </option>
               @endforeach
              </select>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-12">
            <label for="tipo_investigacion">Tipo de investigacion:</label>
              <select name="tipo_investigacion">
               @foreach($tipos as $tipo)
                 <option> {{ $tipo->tipo }} </option>
               @endforeach
              </select>
          </div>
        </div>
          <div class="form-group col-md-12" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Guardar</button>
          </div>
        </div>
      </form>
    </div>
@endsection