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
                    @if(Session::has('user_created'))
                        <div class="alert alert-success" role="alert">
                            <strong>Genial!</strong> El usuario fue registrado, inicia sesión.
                        </div>
                    @endif
                    <form action="login" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="email">Escribe tu correo:</label>
                            <input type="email" class="form-control form-control-lg" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Escribe tu password</label>
                            <input type="password" class="form-control form-control-lg" id="password" name="password">
                        </div>
                        <button class="btn btn-outline-primary btn-lg btn-block">Iniciar sesión</button>
                        <a href="/registrar" class="float-right">¿No tienes una cuenta? registrate</a>
                    </form>
                </div>
            </div>
        </div>
        <div class="col"></div>
    </div>
@stop