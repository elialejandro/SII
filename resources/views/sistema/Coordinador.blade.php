@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                            on Investigador
                        </div>
                    @endif

<div class="row"> {{-- comentario --}}
    <div class="col-3">
        <div class="bg-warning text-white">
          Usuarios registrados: {{$count}}
          <img src="https://image.flaticon.com/icons/png/512/97/97797.png" usemap="#Map0" style="width:90px; position: relative;  right: -10px;  "alt="">
            <map name="Map0">
            <area alt="" title="" href="usuarios" shape="poly" coords="13,11,499,14,498,498,14,500" />
            <area alt="" title="" href="usuarios" shape="poly" coords="13,11,499,14,498,498,14,500" />
            </map>
        </div>
    </div>

    <div class="col-3">
        <div class="bg-warning">
          Usuarios registrados: {{$count}}
          <img src="https://image.flaticon.com/icons/svg/54/54551.svg" usemap="#Map1" style="width:90px; position: relative;  right: -10px;  "alt="">
            <map name="Map1">
            <area alt="" title="" href="convocatoria" shape="poly" coords="13,11,499,14,498,498,14,500" />
            <area alt="" title="" href="convocatoria" shape="poly" coords="13,11,499,14,498,498,14,500" />
            </map>
        </div>
    </div>

    <div class="col-3">
        <div class="bg-warning">
          Usuarios registrados: {{$count}}
          <img src="https://image.flaticon.com/icons/png/512/97/97797.png" usemap="#Map" style="width:90px; position: relative;  right: -10px;  "alt="">
            <map name="Map" id="Map">
            <area alt="" title="" href="usuarios" shape="poly" coords="13,11,499,14,498,498,14,500" />
            <area alt="" title="" href="usuarios" shape="poly" coords="13,11,499,14,498,498,14,500" />
            </map>
        </div>
    </div>

    <div class="col-3">
        <div class="bg-warning">
          Usuarios registrados: {{$count}}
          <img src="https://image.flaticon.com/icons/png/512/97/97797.png" usemap="#Map" style="width:90px; position: relative;  right: -10px;  "alt="">
            <map name="Map" id="Map">
            <area alt="" title="" href="usuarios" shape="poly" coords="13,11,499,14,498,498,14,500" />
            <area alt="" title="" href="usuarios" shape="poly" coords="13,11,499,14,498,498,14,500" />
            </map>
        </div>
    </div>
</div>{{-- termina la primer fila --}}

<br>
<div class="row"> {{-- comienza la fila --}}
    <div class="col-3">
        <div class="bg-warning">
          Usuarios registrados: {{$count}}
          <img src="https://image.flaticon.com/icons/png/512/97/97797.png" usemap="#Map" style="width:90px; position: relative;  right: -10px;  "alt="">
            <map name="Map" id="Map">
            <area alt="" title="" href="usuarios" shape="poly" coords="13,11,499,14,498,498,14,500" />
            <area alt="" title="" href="usuarios" shape="poly" coords="13,11,499,14,498,498,14,500" />
            </map>
        </div>
    </div>

    <div class="col-3">
        <div class="bg-warning">
          Usuarios registrados: {{$count}}
          <img src="https://image.flaticon.com/icons/png/512/97/97797.png" usemap="#Map" style="width:90px; position: relative;  right: -10px;  "alt="">
            <map name="Map" id="Map">
            <area alt="" title="" href="usuarios" shape="poly" coords="13,11,499,14,498,498,14,500" />
            <area alt="" title="" href="usuarios" shape="poly" coords="13,11,499,14,498,498,14,500" />
            </map>
        </div>
    </div>

    <div class="col-3">
        <div class="bg-warning">
          Usuarios registrados: {{$count}}
          <img src="https://image.flaticon.com/icons/png/512/97/97797.png" usemap="#Map" style="width:90px; position: relative;  right: -10px;  "alt="">
            <map name="Map" id="Map">
            <area alt="" title="" href="usuarios" shape="poly" coords="13,11,499,14,498,498,14,500" />
            <area alt="" title="" href="usuarios" shape="poly" coords="13,11,499,14,498,498,14,500" />
            </map>
        </div>
    </div>

    <div class="col-3">
    </div>
</div>{{-- termina la primer fila --}}


<br>    

                    You are logged in on Corrdinador!
                    <ul>
                        <li><a href="convocatoria">CRUD Convocatorias</a></li>
                        <li><a href="registrados">Proyectos Registrados</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
