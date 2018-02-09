@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> <i class="fa fa-users fa-3x"> Inicio de Sesion</i></div>
                <hr>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Usuario o Email</label>

                            <div class="col-md-6">
                                <label class="sr-only" for="email">Username</label>
                                <div class="input-group mb-2 mb-sm-0">
                                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                    <input id="email" type="email" class="form-control mb-2 mb-sm-0" name="email" value="{{ old('email') }}" required autofocus placeholder="Usuario o Email">
                                </div>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Contraseña</label>
                            <div class="col-md-6">
                                <label class="sr-only" for="password">Username</label>
                                <div class="input-group mb-2 mb-sm-0">
                                    <div class="input-group-addon"><i class="fa fa-key"></i></div>
                                    <input id="password" type="password" name="password" required class="form-control" placeholder="Contraseña">
                                </div>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                     <i class="fa fa-sign-in"></i> Iniciar
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Olvidaste tu Contraseña?
                                </a>
                            </div>
                            <div class="col-md-6 col-md-offset-4">
                                <hr>
                                <a href="{{ url('/register') }}" class="btn btn-block btn-success"> <i class="fa fa-plus "></i> Registrate</a>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
