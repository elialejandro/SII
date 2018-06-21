<!-- show.blade.php -->
@extends('layouts.app')
@section('content')
    <div class="container">
    @if(\Session::has('success'))
      <div class="alert alert-success">
        <p>{{\Session::get('success')}}</p>
      </div><br/>
    @endif
<!--
1. Protocolo
2. Colaboradores
3. Entregables
4. Cronograma
5. Presupuesto (financiado)
-->
   </div>
@endsection

@section('sctipts')
<script src="{{asset('js/vinculacion.js')}}"></script>
<script language="javascript">
  $(document).ready(function(){
    $("#frmvinculacion").on("click", ".btndel" , function (e){
      e.preventDefault(); 
      eliminar( this.value );
    });
    $('#archivo').on('change', agregar);
  });       
</script>
@endsection
@section('breadcrumb')
  <li class="breadcrumb-item active" aria-current="page">SOMETER EL PROYECTO: {{$proyecto->titulo}}</li>
@endsection
@section('styles')
<style>
.pdfobject-container { height: 500px;}
.pdfobject { border: 1px solid #666; }

input:invalid{
  border-color:red;
  border-width: 10px;
}
input:valid{
 border-color:blue; 
}
</style>
@endsection
