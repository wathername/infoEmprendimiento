@extends('layouts.app_admin')

@section('content')
    <div class="right_col" role="main">
        <div class="page-title">
            <div class="title_left">
                <hr>
                <h2>Registro Datos Academicos</h2>
            </div>
        </div>
        <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <a href="{{ url('/home') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
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

                        <form method="POST" action="{{ url('/academic-data/')}}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('POST') }}
                            {{ csrf_field() }}

                            <div class="form-group {{ $errors->has('period_id') ? 'has-error' : ''}}">
                                <label for="period_id" class="col-md-4 control-label">{{ 'Periodo' }}</label>
                                <div class="col-md-2">
                                    {!! Form::select('period_id', $period, old('period_id'), ['class' => 'form-control', 'required']) !!}
                                    {!! $errors->first('period_id', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('matter_id') ? 'has-error' : ''}}">
                                {!! Form::label('matter_id', 'Materias', ['class' => 'col-md-4 control-label']) !!}
                                <div class="col-md-6 col-md-offset-0">
                                    <br>
                                    @foreach($matter as $matter)
                                        <div class="col-md-6">
                                            <input type="checkbox" name="matter_id[{{ $matter->id }}]" id="matter_id" value="{{ $matter->id }}">
                                            <span>{{ $matter->matter }}</span>
                                            {!! $errors->first('matter_id', '<p class="help-block">:message</p>') !!}
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-6 col-lg-offset-3">
                                    <hr>
                                </div>
                                <div class="col-md-offset-4 col-md-4">
                                    <button class="btn btn-success btn-block" type="submit"><i class="fa fa-plus-circle"> Guardar Datos Academicos</i></button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
        </div>
    </div>
@endsection

