@extends('layouts.app_admin')

@section('content')
    <div class="right_col" role="main">
        <div class="page-title">
            <div class="title_left">
                <h3><small></small></h3>
            </div>
        </div>
        <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Perfil</div>
                    <div class="panel-body">
                        <a href="{{ url('/profile') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Regresar</button></a>
                        <br />
                        <div class="col-lg-6 col-sm-offset-4">
                            <i class="fa fa-camera-retro fa-2x"> Seleccione Imagen</i>
                        </div>
                        <div class="col-lg-6 col-sm-offset-3">
                            <hr>
                        </div>

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/profile/photo/update', 'class' => 'form-horizontal', 'files' => true]) !!}

                        <div class="form-group {{ $errors->has('photo') ? 'has-error' : ''}}">
                            <div class="col-md-6 col-sm-offset-4">
                                {!! Form::file('photo', null, ['class' => 'form-control', 'required']) !!}
                                {!! $errors->first('photo', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-4">
                                <hr>
                                <button type="submit" class="btn btn-success btn-block">
                                    <i class="fa fa-edit"></i> Actualizar Foto
                                </button>
                            </div>
                        </div>
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
