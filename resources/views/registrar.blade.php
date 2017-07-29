@extends('layout')
@section('title')
    {{ $title }}
@stop
@section('content')
    <div class="row">
        <div class="col"></div>
        <div class="col-6">
            <div class="jumbotron jumbotron-fluid box-login">
                <div class="container">
                    <form>
                        <div class="form-group">
                            <label for="name">Escribe tu nombre:</label>
                            <input type="text" class="form-control form-control-lg" id="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Escribe tu correo:</label>
                            <input type="email" class="form-control form-control-lg" id="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Escribe tu password</label>
                            <input type="password" class="form-control form-control-lg" id="password">
                        </div>
                        <button class="btn btn-outline-primary btn-lg btn-block">Registrarme</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col"></div>
    </div>
@stop