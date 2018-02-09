@extends('layouts.app_admin')

@section('content')
    <div class="right_col" role="main">
        <div class="page-title">
            <div class="title_left">
                <hr>
                <h2>Registro Datos de Pasantia</h2>
            </div>
        </div>
        <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <a href="{{ route('home') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />
                        <div class="title text-center">
                            <h2>Ingrese Los Datos Solicitados</h2>
                            <hr>
                        </div>
                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/company-data/')}}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('POST') }}
                            {{ csrf_field() }}
                            <input name="matter" type="hidden" value="1">
                            <div class="col-lg-8 col-lg-offset-2">
                                <hr>
                                <h5>Datos Empresariales</h5>
                                <hr>
                            </div>
                            <!-- include form -->
                            @include('admin.company-data.partials.form')

                            <div class="form-group">
                                <div class="col-md-offset-4 col-md-4">
                                    <input class="btn btn-primary btn-block" type="submit" value="Guardar Datos">
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
        </div>
    </div>
@endsection

