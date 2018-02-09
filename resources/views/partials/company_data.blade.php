<hr>
<div class="">
    <h2 class="text-center">Por favor ingresar los datos solicitados en cada materia seleccionada!</h2>
    <hr>
    <!-- Nav tabs --><div class="card">
        <ul class="nav nav-tabs" role="tablist">
            @foreach($academicData->matteracademicdatum as $matter)
                <li role="presentation" class=""><a href="#{{$matter->matter->id}}" aria-controls="{{$matter->matter->id}}" role="tab" data-toggle="tab">{{$matter->matter->matter}}</a></li>

            @endforeach
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane" id="1">
                @include('partials.pasantia')
            </div>
            <div role="tabpanel" class="tab-pane" id="2">
                @include('partials.servicio')
            </div>
            <div role="tabpanel" class="tab-pane" id="3">
                @include('partials.proyecto_I')
            </div>
            <div role="tabpanel" class="tab-pane" id="4">
                @include('partials.proyecto_II')
            </div>
        </div>
    </div>
</div>