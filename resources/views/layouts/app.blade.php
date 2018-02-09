<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Ais-Unerg') }}</title>

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    --}}

    <link rel="favicon" href="{{ asset('assets/images/favicon.png')}}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-theme.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel='stylesheet' id='camera-css'  href='{{ asset('assets/css/camera.css') }}' type='text/css' media='all'>

</head>
<body>

<!-- Fixed navbar -->
<div class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <!-- Button for smallest screens -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('assets/images/logo3.png') }}" width="90" height="110" alt="Ais Unerg"></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav pull-right mainNav">
                <li @if(Route::is('index')) class="active" @endif>
                    <a href="{{ url('/') }}">Inicio</a>
                </li>
                <li @if(Route::is('about-prime'))
                        class="active"
                    @elseif(Route::is('about-empre'))
                        class="active"
                    @elseif(Route::is('about-expo'))
                        class="active"
                    @elseif(Route::is('about'))
                        class="active"
                        @endif>
                    <a href="{{ url('/nosotros') }}">Nosotros</a>
                </li>
                <li @if(Route::is('notice')) class="active" @endif><a href="{{route('notice')}}">Noticias</a></li>
                <li @if(Route::is('activity')) class="active" @endif><a href="{{route('activity')}}">Actividades</a></li>
                <!--
                <li><a href="videos.html">Videos</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="sidebar-right.html">Right Sidebar</a></li>
                        <li><a href="#">Dummy Link1</a></li>
                        <li><a href="#">Dummy Link2</a></li>
                        <li><a href="#">Dummy Link3</a></li>
                    </ul>
                </li>-->
                {{-- <li><a href="#">Contactos</a></li>--}}
                <li @if(Route::is('students')) class="active" @endif>
                    <a href="{{ url('/login') }}" class="btn btn-success btn-block">Iniciar Sesion</a>
                </li>

            </ul>
        </div>
        <!--/.nav-collapse  -->
    </div>
</div>
<br>
<BR>
<!-- /.navbar -->
@if(\Session::has('message'))
    @include('layouts.message')
@endif

@yield('content')



<footer id="footer">


    <div class="footer2">
        <div class="container">
            <div class="row">

                <div class="col-md-6 panel">
                    <div class="panel-body">
                        <p class="simplenav">
                            <a href="{{ route('index') }}">Inicio</a> |
                            <a href="{{ route('about') }}">Nosotros</a> |
                            <a href="{{route('notice')}}">Noticias</a> |
                            <a href="{{route('activity')}}">Actividades</a>
                            {{-- <a href="#">Contactos</a> --}}
                        </p>
                    </div>
                </div>

                <div class="col-md-6 panel">
                    <div class="panel-body">
                        <p class="text-right">
                            Copyright &copy; 2017 <a href="{ url('/') }}" rel="develop">Ais-Unerg</a>
                        </p>
                    </div>
                </div>

            </div>
            <!-- /row of panels -->
        </div>
    </div>
</footer>



<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<script src="{{ asset('assets/js/modernizr-latest.js')}}"></script>
<script type='text/javascript' src="{{ asset('assets/js/jquery.min.js')}}"></script>
<script type='text/javascript' src="{{ asset('assets/js/fancybox/jquery.fancybox.pack.js')}}"></script>

<script type='text/javascript' src="{{ asset('assets/js/jquery.mobile.customized.min.js')}}"></script>
<script type='text/javascript' src="{{ asset('assets/js/jquery.easing.1.3.js')}}"></script>
<script type='text/javascript' src="{{ asset('assets/js/camera.min.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('assets/js/custom.js')}}"></script>


<!--
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
-->
<script>
    jQuery(function(){

        jQuery('#camera_wrap_4').camera({
            transPeriod: 500,
            time: 3000,
            height: '600',
            loader: 'false',
            pagination: true,
            thumbnails: false,
            hover: false,
            playPause: false,
            navigation: false,
            opacityOnGrid: false,
            imagePath: 'assets/images/'
        });

    });
</script>
</body>
</html>
