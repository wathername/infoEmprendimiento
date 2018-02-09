@extends('layouts.app')

@section('content')
        <!-- Header -->
<header id="head">
    <div class="container">
        <div class="heading-text">
            <h1 class="animated flipInY delay1">Inicia tu Educación Laboral Ahora!</h1>
            <p>Info-emprendimiento.
                <div class="container">
                    <div class="text-center">
                        <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
                        <a href="#"><i class="fa fa-facebook fa-2x" ></i></a>
                        <a href="#"><i class="fa fa-dribbble fa-2x"></i></a>
                        <a href="#"><i class="fa fa-flickr fa-2x"></i></a>
                        <a href="#"><i class="fa fa-github fa-2x"></i></a>
                    </div>

                    <div class="clear"></div>
                    <!--CLEAR FLOATS-->
                </div>
            </p>
        </div>

        <div class="fluid_container">
            <div class="camera_wrap camera_emboss pattern_1" id="camera_wrap_4">
                <div data-thumb="{{ asset('assets/images/slides/thumbs/img1.jpg')}}" data-src="{{ asset('assets/images/slides/img1.jpg')}}">
                    <h2>We develop.</h2>
                </div>
                <div data-thumb="{{ asset('assets/images/slides/thumbs/img3.jpg')}}" data-src="{{ asset('assets/images/slides/img3.jpg')}}">
                </div>
                <div data-thumb="{{ asset('assets/images/slides/thumbs/img4.jpg')}}" data-src="{{ asset('assets/images/slides/img4.jpg')}}">
                </div>
                <div data-thumb="{{ asset('assets/images/slides/thumbs/img5.jpg')}}" data-src="{{ asset('assets/images/slides/img5.jpg')}}">
                </div>
                <div data-thumb="{{ asset('assets/images/slides/thumbs/img5.jpg')}}" data-src="{{ asset('assets/images/slides/img5.jpg')}}">
                </div>
            </div><!-- #camera_wrap_3 -->
        </div><!-- .fluid_container -->
    </div>
</header>
<!-- /Header -->
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
                <p ALIGN="justify">La primera entrevista de trabajo es un momento clave en el proceso de selección, ya que es un paso muy importante para convencer al entrevistador de que eres la persona idónea para el puesto de trabajo, y averiguar si el empleo al que optas cumple con tus aspiraciones personales y profesionales. Esto es fundamental para conseguir tu primer empleo y adentrarte en el mundo laboral.</p>
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
                <p align="justify">Se conoce como emprendimiento a la actitud y aptitud que toma un individuo para iniciar un nuevo proyecto a través de ideas y oportunidades. El emprendimiento es un término muy utilizado en el ámbito empresarial, en virtud de su relacionamiento con la creación de empresas, nuevos productos o innovación de los mismos.</p>
                <br>
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
                <p align="justify"> La Universidad Nacional Experimental de los Llanos Centrales Rómulo Gallegos (UNERG) presenta a sus estudiantes de 8vo, 9no y 10mo semestre, una serie de eventos que coadyuven a su formación profesional, particularmente en la estructuración y redacción de informes de pasantías, proyectos de desarrollo tecnológicos e informes técnicos.</p>
                <br>
                <p><a href="{{ url('/expo-feria') }}"><em>Leer Mas...</em></a></p>
            </div><!--grey box -->
        </div><!--/span3-->
    </div>
</div>
@endsection
