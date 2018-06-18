<!-- edit.blade.php -->
@extends('layouts.app')
@section('content')
    <div class="container">
      <h2>Editando Información básica del proyecto:{{$proyecto->titulo_proyecto}} de la convocatoria {{ $convocatoria  }} </h2><br/>
        <form method="post" action="{{action('Investigador\ProyectoController@update', $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="form-group col-md-4">
            <label for="Name">Titulo:</label>
            <input type="text" class="form-control" name="titulo" value="{{ $proyecto->titulo_proyecto }}">
          </div>
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Actualizar</button>
          </div>
        </div>

      </form>
    </div>
@endsection