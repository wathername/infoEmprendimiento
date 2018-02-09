@extends('layouts.app_admin')

@section('content')
    <div class="right_col" role="main">
        <div class="page-title">
            <div class="title_left">
                <hr>
                <h2>Registro de Informacion Personal</h2>
            </div>
        </div>
        <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <a href="{{ url('/admin/personal-information') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />
                        <div class="title text-center">
                            <h2>Ingrese Los Datos Solicitados</h2>
                            <div class="alert alert-warning alert-dismissable">
                                <h6> Estimado usuario una vez guardado las datos estos no podran ser modificados. Verifique la informacion antes de guardar los datos!.</h6>
                            </div>
                            <hr>
                        </div>
                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/personal-information/')}}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('POST') }}
                            {{ csrf_field() }}

                            <div class="form-group {{ $errors->has('type_id') ? 'has-error' : ''}}">
                                <label for="type_id" class="col-md-4 control-label">{{ 'Tipo C.I.' }}</label>
                                <div class="col-md-1">
                                    {!! Form::select('type_id', $type, old('type_id'), ['class' => 'form-control', 'required']) !!}
                                    {!! $errors->first('type_id', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div><div class="form-group {{ $errors->has('identification') ? 'has-error' : ''}}">
                                <label for="identification" class="col-md-4 control-label">{{ 'Cedula' }}</label>
                                <div class="col-md-2">
                                    <input class="form-control" name="identification" type="text" id="identification" value="{{ $personalinformation->identification or ''}}" >
                                    {!! $errors->first('identification', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div><div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                                <label for="name" class="col-md-4 control-label">{{ 'Nombres' }}</label>
                                <div class="col-md-4">
                                    <input class="form-control" name="name" type="text" id="name" value="{{ $personalinformation->name or ''}}" required onkeyup="this.value=this.value.toUpperCase()" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
                                    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div><div class="form-group {{ $errors->has('last_name') ? 'has-error' : ''}}">
                                <label for="last_name" class="col-md-4 control-label">{{ 'Apellidos' }}</label>
                                <div class="col-md-4">
                                    <input class="form-control" name="last_name" type="text" id="last_name" value="{{ $personalinformation->last_name or ''}}" required onkeyup="this.value=this.value.toUpperCase()" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
                                    {!! $errors->first('last_name', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div><div class="form-group {{ $errors->has('phone') ? 'has-error' : ''}}">
                                <label for="phone" class="col-md-4 control-label">{{ 'Telefono' }}</label>
                                <div class="col-md-2">
                                    <input class="form-control" name="phone" type="text" id="phone" value="{{ $personalinformation->phone or ''}}" required>
                                    {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div><div class="form-group {{ $errors->has('origin_city_id') ? 'has-error' : ''}}">
                                <label for="origin_city_id" class="col-md-4 control-label">{{ 'Ciudad Origen' }}</label>
                                <div class="col-md-4">
                                    {!! Form::select('origin_city_id', $cities, old('origin_city_id'), ['class' => 'form-control', 'required']) !!}
                                    {!! $errors->first('origin_city_id', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div><div class="form-group {{ $errors->has('recidency_city_id') ? 'has-error' : ''}}">
                                <label for="recidency_city_id" class="col-md-4 control-label">{{ 'Cuidad Recidencia' }}</label>
                                <div class="col-md-4">
                                    {!! Form::select('recidency_city_id', $cities, old('recidency_city_id'), ['class' => 'form-control', 'required']) !!}
                                    {!! $errors->first('recidency_city_id', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div><div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
                                <label for="address" class="col-md-4 control-label">{{ 'Direccion' }}</label>
                                <div class="col-md-6">
                                    <textarea class="form-control" rows="5" name="address" type="textarea" id="address" value="{{ $personalinformation->address or ''}}" required onkeyup="this.value=this.value.toUpperCase()" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">{{ $personalinformation->address or ''}}</textarea>
                                    {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>
                            @if(\Illuminate\Support\Facades\Auth::user()->role_id == 1)
                                <div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
                                    <label for="user_id" class="col-md-4 control-label">{{ 'User Id' }}</label>
                                    <div class="col-md-1">
                                        <input class="form-control" name="user_id" type="number" id="user_id" value="{{ $personalinformation->user_id or ''}}" readonly>
                                        {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
                                    </div>
                                </div>
                            @endif


                            <div class="form-group">
                                <div class="col-md-offset-4 col-md-4">
                                    <input class="btn btn-primary" type="submit" value="Guardar Datos Personales">
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
        </div>
    </div>
@endsection

