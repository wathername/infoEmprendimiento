@extends('layouts.app')

@section('content')
    <header id="head" class="secondary">
        <div class="container">
            <h1>Noticias</h1>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form method="GET" action="{{ url('/admin/post') }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                        <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                    </div>
                </form>
                <div class="grey-box-icon">
                    <div class="col-md-9 product-right">
                        @foreach($post as $posts)
                            <div class="p-right">
                                <div class="col-md-6">
                                    <img src="{{ asset($posts->image) }}" alt="" width="200" height="150">
                                </div>
                                <a href="{{url('/p-single/' . $posts->id)}}"> </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="pagination-wrapper"> {!! $post->appends(['search' => Request::get('search')])->render() !!} </div>
                </div><!--grey box -->
            </div><!--/span3-->

        </div>
    </div>


@endsection
