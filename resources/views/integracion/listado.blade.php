<!-- index.blade.php -->
@extends('layouts.app')
@section("content")
    <div class="container">
    <br />
    Proyectos Registrados Por Convocatoria
    <table class="table">
    <thead>
      <tr>
        <th>Convocatoria</th>
        <th colspan="2">Proyecto(s)</th>
      </tr>
    </thead>
    <tbody>
      @foreach($convocatorias as $convocatoria)
      <tr class="info">
        <td>
          {{$convocatoria['Nombre']}}<br>
          {{$convocatoria['Fecha_inicio']}} a {{$convocatoria['Fecha_fin']}}
        </td>        
      </tr>
          @foreach($convocatoria->proyectos as $proyecto)
      <tr>
        <td></td>
          <td>
              {{$proyecto['titulo']}} <br>
              Director: {{$proyecto->director->name}}
          </td>
          <td>
                  <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Documentos<span class="caret"></span>
                    </button>
                    <ol class="dropdown-menu text-left">
                      <li><a class="drowpdown-item" href="{{action('DocumentosController@cr01', $proyecto['id'])}}">CR-01</a></li>
                      <li><a class="drowpdown-item" href="#">CR-02</a></li>
                      @if($proyecto['vinculacion'] != "")
                      <li><a href="{{action('DocumentosController@vinculacion', $proyecto['id'])}}">Vinculacion</a></li>
                      @endif
                      <!-- <li><a href="{{action('Investigador\SometerController@someter', $proyecto['id'])}}">7. Someter</a></li> -->
                    </ol>
                  </div>
          </td>
      </tr>
          @endforeach
     @endforeach
    </tbody>
  </table>
  </div>
  {{ $convocatorias->links() }}
@endsection
 