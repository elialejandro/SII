<!-- mostrar.blade.php -->
@extends('layouts.app')
@section("content")
<div class="container">
@if (\Session::has('success'))
  <div class="alert alert-success">
    <p>{{ \Session::get('success') }}</p>
  </div>
@endif
@if (\Session::has('error'))
  <div class="alert alert-danger">
    <p>{{ \Session::get('error') }}</p>
  </div>
 @endif
  <form method="post" action="{{action('Investigador\ProtocoloController@update', $proyecto->id)}}">  
    {{ csrf_field() }}
    <div class="row">
      <div class="col-md-2">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <a class="nav-link active"  data-toggle="pill" href="#tresumen"         role="tab" aria-controls="resumen" aria-selected="true">Resumen</a>
          <a class="nav-link"         data-toggle="pill" href="#tintroduccion"    role="tab" aria-controls="introduccion" aria-selected="true">Introduccion</a>
          <a class="nav-link"         data-toggle="pill" href="#tantecedentes"    role="tab" aria-controls="antecedentes" aria-selected="false">Antecedentes</a>
          <a class="nav-link"         data-toggle="pill" href="#thipotesis"       role="tab" aria-controls="hipotesis" aria-selected="false">Hipotesis</a>       
          <a class="nav-link"         data-toggle="pill" href="#tmarco"           role="tab" aria-controls="marco" aria-selected="false">Marco teórico</a>
          <a class="nav-link"         data-toggle="pill" href="#tmetas"           role="tab" aria-controls="metas" aria-selected="false">Metas</a>
          <a class="nav-link"         data-toggle="pill" href="#tobjetivos"       role="tab" aria-controls="obetivos" aria-selected="false">Objetivos</a>
          <a class="nav-link"         data-toggle="pill" href="#timpacto"         role="tab" aria-controls="impacto" aria-selected="false">Impacto o beneficio</a>
          <a class="nav-link"         data-toggle="pill" href="#tmetodologia"     role="tab" aria-controls="metodologia" aria-selected="false">Metodologia</a>        
          <a class="nav-link"         data-toggle="pill" href="#tvinculacion"     role="tab" aria-controls="metodologia" aria-selected="false">Vinculacion</a>
          <a class="nav-link"         data-toggle="pill" href="#treferencias"     role="tab" aria-controls="referencia" aria-selected="false">Referencias</a>
        </div>
      </div> <!-- .col-md-8 -->
      <div class="col-md-10">
        <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="tresumen" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <textarea class="form-control" name="resumen" id="resumen" rows="8" cols="30" maxlength="25">{{$protocolo->resumen}}</textarea>
            <div class="alert alert-info col-4" id="lresumen" role="alert"></div>
          </div>
          <div class="tab-pane fade" id="tintroduccion" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <textarea class="form-control" name="introduccion" id="introduccion" rows="8" cols="30" maxlength="25">{{$protocolo->introduccion}}</textarea>
            <div class="alert alert-info col-4" id="lintroduccion" role="alert"></div>
          </div>
          <div class="tab-pane fade" id="tantecedentes" role="tabpanel" aria-labelledby="v-pills-profile-tab">
            <textarea class="form-control" name="antecedentes" id="antecedentes" rows="8" cols="30" maxlength="25">{{$protocolo->antecedentes}}</textarea>
            <div class="alert alert-info col-4" id="lantecedentes" role="alert"></div>  
          </div>
          <div class="tab-pane fade" id="thipotesis" role="tabpanel" aria-labelledby="v-pills-messages-tab">
           <textarea class="form-control" name="hipotesis" id="hipotesis" rows="8" cols="30" maxlength="25">{{$protocolo->hipotesis}}</textarea>
           <div class="alert alert-info col-4" id="lhipotesis" role="alert"></div>
          </div>
          <div class="tab-pane fade" id="tmarco" role="tabpanel" aria-labelledby="v-pills-profile-tab">
            <textarea class="form-control" name="marco_teorico" id="marco_teorico" rows="8" cols="30" maxlength="25">{{$protocolo->marco_teorico}}</textarea>
            <div class="alert alert-info col-4" id="lmarco" role="alert"></div>  
          </div>
          <div class="tab-pane fade" id="tmetas" role="tabpanel" aria-labelledby="v-pills-profile-tab">
            <textarea class="form-control" name="metas" id="metas" rows="8" cols="30" maxlength="25">{{$protocolo->metas}}</textarea>
            <div class="alert alert-info col-4" id="lmetas" role="alert"></div>  
          </div>
          <div class="tab-pane fade" id="tobjetivos" role="tabpanel" aria-labelledby="v-pills-settings-tab">
            <label for="objetivo_general">General:</label>
            <textarea class="form-control" name="objetivo_general" id="objetivo_general" rows="2" cols="30" maxlength="25">{{$protocolo->objetivo_general}}</textarea>        
            <div class="alert alert-info col-4" id="lgeneral" role="alert"></div>
            <label for="objetivos_especificos">Especificos:</label>
            <textarea class="form-control" name="objetivos_especificos" id="objetivos_especificos" rows="8" cols="30" maxlength="25">{{$protocolo->objetivos_especificos}}</textarea>
            <div class="alert alert-info col-4" id="lespecificos" role="alert"></div>
          </div>  
          <div class="tab-pane fade" id="timpacto" role="tabpanel" aria-labelledby="v-pills-profile-tab">
            <textarea class="form-control" name="impacto_beneficio" id="impacto_beneficio" rows="8" cols="30" maxlength="25">{{$protocolo->impacto_beneficio}}</textarea>
            <div class="alert alert-info col-4" id="limpacto" role="alert"></div>  
          </div>
          <div class="tab-pane fade" id="tmetodologia" role="tabpanel" aria-labelledby="v-pills-profile-tab">
            <textarea class="form-control" name="metodologia" id="metodologia" rows="8" cols="30" maxlength="25">{{$protocolo->metodologia}}</textarea>
            <div class="alert alert-info col-4" id="lmetodologia" role="alert"></div>  
          </div>
          <div class="tab-pane fade" id="tvinculacion" role="tabpanel" aria-labelledby="v-pills-profile-tab">
            <textarea class="form-control" name="vinculacion" id="vinculacion" rows="8" cols="30" maxlength="25">{{$protocolo->vinculacion}}</textarea>
            <div class="alert alert-info col-4" id="lvinculacion" role="alert"></div>  
          </div>
          <div class="tab-pane fade" id="treferencias" role="tabpanel" aria-labelledby="v-pills-profile-tab">
            <textarea class="form-control" name="referencias" id="referencias" rows="8" cols="30" maxlength="25">{{$protocolo->referencias}}</textarea>
            <div class="alert alert-info col-4" id="lreferencias" role="alert"></div>  
          </div>
        </div>
      </div> <!-- .col-md-8 -->
    </div>
    <div class="row">
      <button type="submit" class="btn btn-success" value="Submit">Guardar</button>
    </div>
  </form>
@endsection

@section('sctipts')
<script language="javascript">
  $( document ).ready(function() {
    $('textarea').keyup(function (e) {
        var este = $(this),
            maxlength = este.attr('maxlength'),
            maxlengthint = parseInt(maxlength),
            textoActual = este.val(),
            currentCharacters = este.val().length;
            remainingCharacters = maxlengthint - currentCharacters,
            espan = este.next();            
            // Detectamos si es IE9 y si hemos llegado al final, convertir el -1 en 0 - bug ie9 porq. no coge directamente el atributo 'maxlength' de HTML5
            if (document.addEventListener && !window.requestAnimationFrame) {
                if (remainingCharacters <= -1) {
                    remainingCharacters = 0;            
                }
            }
            var porcentaje = currentCharacters * 100 / maxlengthint;
            espan.html(currentCharacters + "/" + maxlengthint + ", quedan " + remainingCharacters + " caracteres (" + porcentaje + "%)" );
            if (!!maxlength) {
                espan.removeClass();
                if ( porcentaje > 80 && porcentaje <= 90){
                  //amarillo
                  espan.addClass("alert alert-warning col-4");
                }else if ( porcentaje > 90){
                  //rojo
                  espan.addClass("alert alert-danger col-4");
                }else{
                  //verde
                  espan.addClass("alert alert-success col-4");
                }
            }   
        });
//    var $divs = $('div');
//    $("#btnadd").click(agregar);    
//    $("#colaboradores-list tbody").on("click", ".btndel" , desinvitar);
  });

</script>

 @endsection


@section('breadcrumb')
  <li class="breadcrumb-item active" aria-current="page">PROTOCOLO DEL PROYECTO: {{$proyecto->titulo}}</li>
@endsection

