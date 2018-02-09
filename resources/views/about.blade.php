@extends('layouts.app')

@section('content')
    <header id="head" class="secondary">
        <div class="container">
            <h1>Sobre Nosotros</h1>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="grey-box-icon">
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="icon-box-top grey-box-icon-pos">
                        <img src="assets/images/1.png" alt="" />
                    </div><!--icon box top -->
                    <h4>Primera Entrevista</h4>
                    <p><a href="{{ url('/primera-entrevista') }}"><em>Leer Mas...</em></a></p>
                </div><!--grey box -->
            </div><!--/span3-->
            <div class="col-md-4">
                <div class="grey-box-icon">
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="icon-box-top grey-box-icon-pos">
                        <img src="assets/images/2.png" alt="" />
                    </div><!--icon box top -->
                    <h4>Emprendimiento</h4>

                    <p><a href="{{ url('/emprendimiento') }}"><em>Leer Mas...</em></a></p>
                </div><!--grey box -->
            </div><!--/span3-->
            <div class="col-md-4">
                <div class="grey-box-icon">
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="icon-box-top grey-box-icon-pos">
                        <img src="assets/images/3.png" alt="" />
                    </div><!--icon box top -->
                    <h4>Expo-Feria</h4>
                    <p><a href="{{ url('/expo-feria') }}"><em>Leer Mas...</em></a></p>
                </div><!--grey box -->
            </div><!--/span3-->
        </div>
    </div>


@endsection
