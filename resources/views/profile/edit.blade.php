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
                            <i class="fa fa-edit fa-2x"> Ingrese los Datos</i>
                            <hr>
                        </div>

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($user, [
                            'method' => 'PATCH',
                            'url' => ['/profile/update'],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('profile.form', ['submitButtonText' => 'Editar Perfil'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
