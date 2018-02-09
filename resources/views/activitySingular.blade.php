@extends('layouts.app')

@section('content')
    <header id="head" class="secondary">
        <div class="container">
            <h1>{{$post->title}}</h1>
        </div>
    </header>
    <!-- container -->
    <hr>
    <section class="container">
        <div class="row">
            <!-- main content -->
            <section class="col-sm-8 maincontent">
                <p align="justify">
                    <img src="{{ asset($post->image) }}" alt="" class="img-rounded pull-right" width="300">
                    {{$post->content}}
                </p>

            </section>
            <!-- /main -->

            <!-- Sidebar -->
            <aside class="col-sm-4 sidebar sidebar-right">

                <div class="panel">
                    <h4>Nuevas Noticias</h4>
                    <ul class="list-unstyled list-spaces">
                        @foreach($posts as $posts)
                        <li><a href="">{{$posts->title}}</a><br>
                            <span class="small text-muted">{{$cadena =str_limit($posts->content, 80)}}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>

            </aside>
            <!-- /Sidebar -->

        </div>
    </section>



@endsection