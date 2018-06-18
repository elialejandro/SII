<!-- 

    Información básica del proyecto

Convocatoria:   Convocatoria 2018: Apoyo a la Investigación Científica y Tecnológica en los Programas Educativos de los Institutos Tecnológicos Federales y Centros
Responsable:    GUZMAN-SANCHEZ, JORGE OCTAVIO
Modalidad:  Por licenciatura
Sometido:   2018-01-24 12:03:31
Dictamen:   Aprobado con financiamiento el 2018-03-12 10:39:18  [Ver detalle]

////Información básica del proyecto
id, titulo, nombre_ies, nombre_pe, area, nivel_academico, 
actreditado_habilitado, pnpc, linea, fecha_elaboracion, 
fecha_inicio, fecha_fin, duracion, convocatoria_id, responsable, 
tipo_investigacion, sometido, dictamen, 

////protocolo
resumen, introduccion, antecedentes, hipotesis, marco_teorico, 
metas, objetivo_general, objetivos_especificos, impacto_beneficio, 
metodologia, vinculacion, referencias, lugar, infraestrucutura

//// integrantes [colaboradores]
id, users_id, proyecto_id, participacion

////entregables
id, tipo, cuantos, descripcion, proyecto_id

////cronograma  (Programa de actividades)
id, actividad, fecha_inicio, fecha_fin, monto, proyecto_id, entregables_id

////insumos-materiales y servicios

////concentrado del presupuesto solicitado

////periodos para para ejercer el recurso


 -->
@extends('layouts.app')
@section('content')
<div class="container">


      <a href="/proyecto/create" class="btn btn-primary">Agregar Proyecto</a>
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    @if (\Session::has('error'))
    <div class="alert alert-danger">
      <p>{{ \Session::get('error') }}</p>
    </div><br/>
    @endif

    <table class="table" border="1">
    <thead>
      <tr>
        <th>Convocatoria</th>
        <th colspan="3">Proyecto</th>
      </tr>
    </thead>
    <tbody>
      @foreach($convocatorias as $convocatoria)
      <tr class="info">
        <td colspan="4">{{$convocatoria['Nombre']}} ({{$convocatoria['Fecha_inicio']}} - {{$convocatoria['Fecha_fin']}})</td>               
      </tr>
          @foreach($convocatoria->proyectos as $proyecto)
            @if($proyecto->responsable==Auth::user()->id)
              <tr>
                <td></td>
                <td>{{$proyecto['titulo']}} <br> Director: {{$proyecto->director->name}}</td>
                <td colspan="1">
                  <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Protocolo y desarrollo <span class="caret"></span>
                    </button>
                    <ol class="dropdown-menu text-left">
                      <li><a href="{{action('Investigador\ProtocoloController@mostar', $proyecto['id'])}}">1. Protocolo</a></li>
                      <li><a href="{{action('Investigador\ColaboradoresController@index', $proyecto['id'])}}">2. Colaboradores</a></li>
                      <li><a href="{{action('Investigador\EntregablesController@index', $proyecto['id'])}}">3. Entregables </a></li>
                      <li><a href="{{action('Investigador\CronogramaController@index', $proyecto['id'])}}">4. Cronograma</a></li>
                      <li><a href="{{action('Investigador\GastosController@index', $proyecto['id'])}}">5. Presupuesto</a></li>
                      <li><a href="{{action('Investigador\VinculacionController@mostrar', $proyecto['id'])}}">6. Vinculación</a></li>
                      <li><a href="#">7. Someter</a></li>
                    </ol>
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Seguimiento<span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                      <li><a href="#">8. Documentos de Propuesta</a></li>
                      <li><a href="#">9. Productividad</a></li>
                      <li><a href="#">10. Informes Técnicos</a></li>
                    </ul>
                  </div>

                </td>
                  <td>
                    <form action="{{action('Investigador\ProyectoController@destroy', $proyecto['id'])}}" method="post">
                    @csrf
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger" type="submit">Eliminar</button>
                  </form>
                </td>
              </tr>
            @else
                <?php foreach ($proyecto->colaboradores as $colaborador): ?>
                    @if($colaborador->users_id==Auth::user()->id)
                      <tr>
                        <td></td>
                        <td>{{$proyecto['titulo']}} <br> Director: {{$proyecto->director->name}}</td>
                        <td colspan="2" > 
                            <button class="btn btn-active" type="button">Ver</button>
                            @if(!$colaborador->participacion)
                              <button id="si{{$colaborador->id}}" class="btn btn-success btnaceptar" value="{{$colaborador->id}}" type="button">Aceptar</button>
                              <button id="no{{$colaborador->id}}" class="btn btn-danger  btnrechaza" value="{{$colaborador->id}}" type="button">Rechazar</button>
                            @endif
                        </td>
                      </tr>
                    @endif

                <?php endforeach ?>
                </td>
              </tr>
            @endif
          @endforeach
     @endforeach
    </tbody>
  </table>
   {{ $convocatorias->links() }}
  </div>
@endsection

@section('sctipts')
<script language="javascript">
  $( document ).ready(function() {
    $(".btnaceptar").click(aceptar);    
    $(".btnrechaza").click(rechaza);    
  });
</script>
 <script src="{{asset('js/aceptacion.js')}}"></script>
 @endsection