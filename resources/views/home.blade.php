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
            <div class="col-md-10 col-md-offset-1">
                @if( $user->statu_id != 1)
                    <div class="alert alert-danger">
                        <p class="text-center">Estimado usuario {{Auth::user()->name}} su cuenta aun no se encuentra activa! Por favor <a href="{{ url('activar')}}">Active su cuenta Aqui!</a> para continuar con el registro.</p>
                        <p class="text-center">Cierre sesion y revise su correo para activar su cuenta.</p>
                    </div>
                @endif
            </div>
        </div>
        <!-- page content -->
        <div>
            <!-- top tiles -->
                @include('partials.topTiles')
            <!-- /top tiles -->
                <!-- Progress -->
                <div class="col-md-12">
                    @if($user->statu_id == 2 )
                    <div class="progress" style="height: 1px;">
                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress" style="height: 20px;">
                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">10% Progreso del registro</div>
                    </div>
                    @elseif($user->statu_id == 1 and $personalinformation->statu_id == 3)
                        <div class="progress" style="height: 1px;">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 25%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress" style="height: 20px;">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 25%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">25% Progreso del registro</div>
                        </div>
                    @elseif($personalinformation->statu_id == 4)
                        <div class="progress" style="height: 1px;">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 50%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress" style="height: 20px;">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 50%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">50% Progreso del registro</div>
                        </div>
                    @else

                    @endif
                </div>
                @if($user->statu_id != '1')
                    <div class="col-lg-8 col-lg-offset-2">
                        <h2 class="alert alert-info text-center">Para continuar con el registro la cuenta debe de estar activa al 100%!</h2>
                    </div>
                @else

                <div class="row">
                    @if($user->role_id == 3)
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="dashboard_graph">
                                <div class="title_left">
                                    <h3>Registro de Informacion</h3>
                                </div>
                                <hr>
                                <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true"> <i class="fa fa-user"> Datos Personales</i></a>
                                        </li>
                                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false"><i class="fa fa-university"> Datos Academicos</i></a>
                                        </li>
                                        <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false"><i class="fa fa-building"></i> Datos Empresariales</a>
                                        </li>
                                    </ul>
                                    <div id="myTabContent" class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                                            <!-- start recent activity -->
                                            @include('partials.personalInformation')
                                            <!-- end recent activity -->
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                                            <!-- start recent activity -->
                                            @include('partials.academic_data')
                                            <!-- end recent activity -->
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">

                                            @include('partials.company_data')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            @endif
            <br />
        </div>

        <!-- /page content -->
    </div>
        </div>
    </div>
@endsection
