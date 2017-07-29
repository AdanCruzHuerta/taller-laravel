@extends('layout')
@section('title')
    Panel
@stop
@section('content')
    <div id="panel" class="container">
        <div class="row">
            <div class="col">
                <h4 class="float-lg-left">{{ \Auth::user()->name }}</h4>
            </div>
            <div class="col">
               <a href="/cerrar-sesion" class="btn btn-primary float-right">Cerrar sesión</a>
            </div>
        </div>
    </div>
@stop