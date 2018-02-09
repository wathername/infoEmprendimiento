
<ul class="messages">
    <hr>
    <hr>
    @if($academicData->statu_id != '4')
        <div>
            <a href="{{route('academic-data')}}" class="btn btn-success btn-lg"><i class="fa fa-plus-circle"></i> Registar Datos Academicos</a>
        </div>
    @else
        <div class="container">
            <div class="jumbotron">
                <div class="row">
                    <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                        <img src="{{ asset('assets/images/read.svg') }}" width="256" height="256" alt="Ais Unerg"></a>
                    </div>
                    <hr>
                    <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8">
                        <div class="container" style="border-bottom:1px solid black">
                            <h2>{{$personalinformation->name}} {{$personalinformation->last_name}}</h2>
                            <h3>{{$personalinformation->type->type}}{{$personalinformation->identification}}</h3>
                        </div>
                        <hr>
                        <ul class="container details">
                            <li><p><span class="glyphicon glyphicon-time one" style="width:50px;"></span>Período Acadmico - {{$academicData->period->period}}</p></li>
                            <li><p><span class="glyphicon glyphicon-education one" style="width:50px;"></span>Materias Seleccionadas:
                                    @foreach($academicData->matteracademicdatum as $matter)
                                        {{$matter->matter->matter}}
                                    @endforeach</p></li>
                            <li><p><span class="fa fa-check-square one" style="width:50px;"></span>Estatus - {{$academicData->statu->statu}}</p></li>
                        </ul>
                    </div>
                </div>
            </div>
    @endif
</ul>
