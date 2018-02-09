
    @if($company_data_proyecto_II_status == null)
        <h1>Proyecto de Grado II</h1>
        <div>
            <a href="{{url('/company-data/Proyecto-Grado-II')}}" class="btn btn-info btn-lg"><i class="fa fa-plus-circle"></i> Registar Datos</a>
        </div>
    @else
        <div class="container">
            <div class="jumbotron">
                <div class="row">
                    <div class="container" style="border-bottom:1px solid black">
                        <h3>Datos Registrados de Proyecto Grado II</h3>
                    </div>
                    <hr>
                    <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8 col-lg-offset-2">
                        <ul class="container details">
                            @foreach($company_data_proyecto_II as $company_data_proyecto_II)
                                @if(empty($company_data_proyecto_II))
                                    <h5>Por favor registre la informacion</h5>
                                @else
                                    <div class="container text-right" style="border-bottom:1px solid black">
                                        <h4>Datos Empresariales</h4>
                                    </div>
                                    <hr>
                                    <li><p><span class="fa fa-building" style="width:50px;"></span>{{$company_data_proyecto_II->name}}</p></li>
                                    <li><p><span class="fa fa-info one" style="width:50px;"></span>{{$company_data_proyecto_II->type}}{{$company_data_proyecto_II->identification}} </p></li>
                                    <li><p><span class="glyphicon glyphicon-earphone one" style="width:50px;"></span>{{$company_data_proyecto_II->phone}} </p></li>
                                    <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span>{{$company_data_proyecto_II->email}}</p></li>
                                    <li><p><span class="fa fa-globe one" style="width:50px;"></span>{{$company_data_proyecto_II->web_side}}</p></li>
                                    <li><p><span class="fa fa-industry one" style="width:50px;"></span>{{$company_data_proyecto_II->economic_activity}}</p></li>
                                    <li><p><span class="glyphicon glyphicon-map-marker one" style="width:50px;"></span>{{$company_data_proyecto_II->city}} - {{$company_data_proyecto_II->address}}</p></li>

                                    <hr>
                                    <div class="container text-right" style="border-bottom:1px solid black">
                                        <h4>Datos Tutor Empresarial</h4>
                                    </div>
                                    <hr>
                                    @foreach($tutor_data_proyecto_II as $tutor_data_proyecto_II)
                                        <li><p><span class="glyphicon glyphicon-user one" style="width:50px;"></span>{{$tutor_data_proyecto_II->name}} {{$tutor_data_proyecto_II->last_name}} </p></li>
                                        <li><p><span class="fa fa-info one" style="width:50px;"></span>{{$tutor_data_proyecto_II->type}}{{$tutor_data_proyecto_II->identification}} </p></li>
                                        <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span>{{$tutor_data_proyecto_II->email_tutor}}</p></li>
                                        <li><p><span class="glyphicon glyphicon-earphone one" style="width:50px;"></span>{{$tutor_data_proyecto_II->phone}} </p></li>
                                    @endforeach
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @endif
