@extends('layouts.app')

@section('content')
    <header id="head" class="secondary">
        <div class="container">
            <h1>Noticias</h1>
        </div>
    </header>
    <hr>
    <section class="container">
        <div class="row">
            <form method="GET" action="{{ route('notice') }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
                <div class="input-group">
                    <input type="text" class="form-control" name="search" placeholder="Buscar..." value="{{ request('search') }}">
                    <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                </div>
            </form>
            <div class="col-md-12">
                <section id="portfolio" class="page-section section appear clearfix">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="portfolio-items isotopeWrapper clearfix" id="3">
                                    @foreach($posts as $post)
                                        <article class="col-sm-4 isotopeItem webdesign">
                                            <div class="portfolio-item">
                                                <img src="{{ asset($post->image) }}" alt="" />
                                                <div class="portfolio-desc align-center">
                                                    <div class="folio-info">
                                                        <a href="{{url('/noticias/detalle/' . $post->id)}}" class="fancybox">
                                                            <h5>{{$post->title}}</h5>
                                                            <i class="fa fa-link fa-2x"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="pagination-wrapper"> {!! $posts->appends(['search' => Request::get('search')])->render() !!} </div>
            </div>
        </div>
    </section>


@endsection