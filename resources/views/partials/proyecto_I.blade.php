@if($company_data_proyecto_I_status == null)
    <h1>Proyecto de Grado I</h1>
    <div>
        <a href="{{url('/company-data/Proyecto-Grado-I')}}" class="btn btn-info btn-lg"><i class="fa fa-plus-circle"></i> Registar Datos</a>
    </div>
@else
    <div class="container">
        <div class="jumbotron">
            <div class="row">
                <div class="container" style="border-bottom:1px solid black">
                    <h3>Datos Registrados Proyecto de Grado I</h3>
                </div>
                <hr>
                <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8 col-lg-offset-2">
                    <ul class="container details">
                        <div class="container text-right" style="border-bottom:1px solid black">
                            <h4>Datos Empresariales</h4>
                        </div>
                        <hr>
                        @foreach($company_data_proyecto_I as $company_data_pasantia)
                            <li><p><span class="fa fa-building" style="width:50px;"></span>{{$company_data_pasantia->name}}</p></li>
                            <li><p><span class="fa fa-info one" style="width:50px;"></span>{{$company_data_pasantia->type}}{{$company_data_pasantia->identification}} </p></li>
                            <li><p><span class="glyphicon glyphicon-earphone one" style="width:50px;"></span>{{$company_data_pasantia->phone}} </p></li>
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span>{{$company_data_pasantia->email}}</p></li>
                            <li><p><span class="fa fa-globe one" style="width:50px;"></span>{{$company_data_pasantia->web_side}}</p></li>
                            <li><p><span class="fa fa-industry one" style="width:50px;"></span>{{$company_data_pasantia->economic_activity}}</p></li>
                            <li><p><span class="glyphicon glyphicon-map-marker one" style="width:50px;"></span>{{$company_data_pasantia->city}} - {{$company_data_pasantia->address}}</p></li>
                        @endforeach
                        <hr>
                        <div class="container text-right" style="border-bottom:1px solid black">
                            <h4>Datos Tutor Empresarial</h4>
                        </div>
                        <hr>
                        @foreach($tutor_data_proyecto_I as $tutor_data_pasantia)
                            <li><p><span class="glyphicon glyphicon-user one" style="width:50px;"></span>{{$tutor_data_pasantia->name}} {{$tutor_data_pasantia->last_name}} </p></li>
                            <li><p><span class="fa fa-info one" style="width:50px;"></span>{{$tutor_data_pasantia->type}}{{$tutor_data_pasantia->identification}} </p></li>
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span>{{$tutor_data_pasantia->email_tutor}}</p></li>
                            <li><p><span class="glyphicon glyphicon-earphone one" style="width:50px;"></span>{{$tutor_data_pasantia->phone}} </p></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endif