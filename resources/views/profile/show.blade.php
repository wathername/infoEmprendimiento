@extends('layouts.app_admin')

@section('content')
    <div class="right_col" role="main">
        <div class="page-title">
            <div class="title_left">
                <h3><small></small></h3>
            </div>
        </div>
        <div class="col-md-12">
            <div class="container">
                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-heading">  <h4 >Perfil del Usuario - {{$user->personalInformation->name}} {{$user->personalInformation->last_name}}</h4></div>
                        <div class="panel-body">
                            <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                                @if($user->photo == null)
                                    <img src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" alt="..." id="profile-image1" class="img-circle img-responsive">
                                @else
                                    <img src="{{ asset($user->photo) }}" alt="" id="profile-image1" class="img-circle img-responsive">
                                @endif
                                <a href="{{route('profile-photo')}}"><i class="fa fa-camera-retro fa-2x"></i></a>
                            </div>
                            <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8" >
                                <div class="container" >
                                    <h2>{{ $user->name }} <a href="{{route('profile-edit')}}"> <span class="glyphicon glyphicon-edit one" style="width:50px;"></span></a></h2>
                                    <p>Tipo de cuenta:  <b> {{ $user->role->role }}</b></p>


                                </div>
                                <hr>
                                <ul class="container details" >
                                    <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span>{{ $user->email }}</p></li>
                                    <li><p><span class="glyphicon glyphicon-user" style="width:50px;"></span>{{ $user->user }}</p></li>
                                    <li><p><span class="glyphicon glyphicon-list one" style="width:50px;"></span>{{ $user->profession->profession}}</p></li>
                                    <li><p><span class="glyphicon glyphicon-user one" style="width:50px;"></span>@if($user->statu_id == 2)
                                                <span class="btn btn-danger btn-xs">Inactivo</span>@else <span class="btn btn-success btn-xs">Activo(a)</span> @endif</p></li>

                                </ul>
                                <hr>
                                <div class="col-sm-5 col-xs-6 tital " >Fecha de creación: {{ $user->created_at }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
