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
