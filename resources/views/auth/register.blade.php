@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><i class="fa fa-plus fa-3x"> Registro de Usuario</i></div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}
                            <hr>
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Nombres </label>
                                <div class="col-md-6">
                                    <label class="sr-only" for="name">name</label>
                                    <div class="input-group mb-2 mb-sm-0">
                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                        <input id="name" type="text" class="form-control mb-2 mb-sm-0" name="name" value="{{ old('name') }}" required autofocus placeholder="Nombres" onkeyup="this.value=this.value.toUpperCase()" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
                                    </div>
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                <label for="last_name" class="col-md-4 control-label">Apellidos </label>
                                <div class="col-md-6">
                                    <label class="sr-only" for="name">last_name</label>
                                    <div class="input-group mb-2 mb-sm-0">
                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                        <input id="last_name" type="text" class="form-control mb-2 mb-sm-0" name="last_name" value="{{ old('last_name') }}" required autofocus placeholder="Apellidos" onkeyup="this.value=this.value.toUpperCase()" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
                                    </div>
                                    @if ($errors->has('last_name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('profession') ? ' has-error' : '' }}">
                                <label for="profession" class="col-md-4 control-label">Profesión </label>
                                <div class="col-md-6">
                                    <label class="sr-only" for="profession">profession</label>
                                    <div class="input-group mb-2 mb-sm-0">
                                        <div class="input-group-addon"><i class="fa fa-th-list"></i></div>
                                        <select id="profession" class="form-control" name="profession" value="{{ old('profession') }}" required autofocus>
                                            <option value="1">Estudiante</option>
                                            <option value="2">Profesor</option>
                                        </select>
                                    </div>
                                    @if ($errors->has('profession'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('profession') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">Correo Electronico</label>

                                <div class="col-md-6">
                                    <label class="sr-only" for="email">email</label>
                                    <div class="input-group mb-2 mb-sm-0">
                                        <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                        <input id="email" type="email" class="form-control mb-2 mb-sm-0" name="email" value="{{ old('email') }}" required autofocus placeholder="nombre@explample.com">
                                    </div>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('user') ? ' has-error' : '' }}">
                                <label for="user" class="col-md-4 control-label">Nombre Usuario</label>

                                <div class="col-md-6">
                                    <label class="sr-only" for="user">user</label>
                                    <div class="input-group mb-2 mb-sm-0">
                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                        <input id="user" type="text" class="form-control mb-2 mb-sm-0" name="user" value="{{ old('user') }}" required autofocus placeholder="Nombre Usuario" onkeyup="this.value=this.value.toUpperCase()" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
                                    </div>
                                    @if ($errors->has('user'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('user') }}</strong>
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
                                <label for="password-confirm" class="col-md-4 control-label">Repitir Contraseña</label>
                                <div class="col-md-6">
                                    <div class="input-group mb-2 mb-sm-0">
                                        <div class="input-group-addon"><i class="fa fa-repeat"></i></div>
                                        <input id="password-confirm" type="password" name="password_confirmation" required class="form-control" placeholder="Repita Contraseña">
                                    </div>
                                </div>
                                @if ($errors->has('password-confirm'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password-confirm') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-success btn-block">
                                        <i class="fa fa-plus"></i> Registrarme
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
