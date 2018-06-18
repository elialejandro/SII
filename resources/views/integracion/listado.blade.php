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
              {{$proyecto['titulo']}}
          </td>
          <td>
              Director: {{$proyecto->director->name}}
          </td>
      </tr>
          @endforeach
     @endforeach
    </tbody>
  </table>
  </div>
  {{ $convocatorias->links() }}
@endsection
 