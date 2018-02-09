<ul class="messages">
    <hr>
    @if($personalinformation->statu_id != '4')
        <div>
            <a href="{{route('personal-information')}}" class="btn btn-info btn-lg"><i class="fa fa-plus-circle"></i> Registar Datos Personales</a>
        </div>
    @else
        <div class="container">
            <div class="jumbotron">
                <div class="row">
                    <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                        <img src="https://www.svgimages.com/svg-image/s5/man-passportsize-silhouette-icon-256x256.png" alt="stack photo" class="img">
                    </div>
                    <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8">
                        <div class="container" style="border-bottom:1px solid black">
                            <h2>{{$personalinformation->name}} {{$personalinformation->last_name}}</h2>
                            <h3>{{$personalinformation->type->type}}{{$personalinformation->identification}}</h3>
                        </div>
                        <hr>
                        <ul class="container details">
                            <li><p><span class="glyphicon glyphicon-earphone one" style="width:50px;"></span>{{$personalinformation->phone}}</p></li>
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span>{{$personalinformation->user->email}}</p></li>
                            <li><p><span class="glyphicon glyphicon-map-marker one" style="width:50px;"></span>Cuidad Origen - {{$personalinformation->origin_city->city}}, Estado {{$personalinformation->origin_city->state->state}}</p></li>
                            <li><p><span class="glyphicon glyphicon-map-marker one" style="width:50px;"></span>Cuidad Recidencia - {{$personalinformation->recidency_city->city}}, Estado {{$personalinformation->origin_city->state->state}}</p></li>
                            <li><p><span class="fa fa-location-arrow one" style="width:50px;"></span>{{$personalinformation->address}}</p></li>
                            <li><p><span class="fa fa-check-square one" style="width:50px;"></span>Estatus - {{$personalinformation->statu->statu}}</p></li>
                        </ul>
                    </div>
                </div>
            </div>
    @endif
</ul>