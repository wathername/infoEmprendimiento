<div class="form-group {{ $errors->has('type_id') ? 'has-error' : ''}}">
    <label for="type_id" class="col-md-4 control-label">{{ 'Tipo C.I.*' }}</label>
    <div class="col-md-1">
        {!! Form::select('type_id', $type, old('type_id'), ['class' => 'form-control', 'required']) !!}
        {!! $errors->first('type_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('identification') ? 'has-error' : ''}}">
    <label for="identification" class="col-md-4 control-label">{{ 'Cedula o Rif*' }}</label>
    <div class="col-md-2">
        <input class="form-control" name="identification" type="text" id="identification" value="{{ $personalinformation->identification or ''}}" >
        {!! $errors->first('identification', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="col-md-4 control-label">{{ 'Nombre o Razon Social*' }}</label>
    <div class="col-md-4">
        <input class="form-control" name="name" type="text" id="name" value="{{ $personalinformation->name or ''}}" required onkeyup="this.value=this.value.toUpperCase()" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('phone') ? 'has-error' : ''}}">
    <label for="phone" class="col-md-4 control-label">{{ 'Telefono*' }}</label>
    <div class="col-md-2">
        <input class="form-control" name="phone" type="text" id="phone" value="{{ $personalinformation->phone or ''}}" required>
        {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="col-md-4 control-label">{{ 'Correo Electronico*' }}</label>
    <div class="col-md-4">
        <input class="form-control" name="email" type="email" id="email" value="{{ $personalinformation->phone or ''}}" required>
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('recidency_city_id') ? 'has-error' : ''}}">
    <label for="recidency_city_id" class="col-md-4 control-label">{{ 'Cuidad Recidencia*' }}</label>
    <div class="col-md-4">
        {!! Form::select('recidency_city_id', $cities, old('recidency_city_id'), ['class' => 'form-control', 'required']) !!}
        {!! $errors->first('recidency_city_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
    <label for="address" class="col-md-4 control-label">{{ 'Direccion*' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="address" type="textarea" id="address" value="{{ $personalinformation->address or ''}}" required onkeyup="this.value=this.value.toUpperCase()" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">{{ $personalinformation->address or ''}}</textarea>
        {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('web_side') ? 'has-error' : ''}}">
    <label for="web_side" class="col-md-4 control-label">{{ 'Portal Web' }}</label>
    <div class="col-md-4">
        <input class="form-control" name="web_side" type="text" id="web_side" >
        {!! $errors->first('web_side', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('economic_activity') ? 'has-error' : ''}}">
    <label for="economic_activity" class="col-md-4 control-label">{{ 'Actividad Economica*' }}</label>
    <div class="col-md-4">
        <input class="form-control" name="economic_activity" type="text" id="economic_activity" required >
        {!! $errors->first('economic_activity', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="col-lg-8 col-lg-offset-2">
    <hr>
    <h5>Datos del Tutor Empresarial</h5>
    <hr>
</div>
<div class="form-group {{ $errors->has('type_id_tutor') ? 'has-error' : ''}}">
    <label for="type_id_tutor" class="col-md-4 control-label">{{ 'Tipo C.I.*' }}</label>
    <div class="col-md-1">
        {!! Form::select('type_id_tutor', $type, old('type_id_tutor'), ['class' => 'form-control', 'required']) !!}
        {!! $errors->first('type_id_tutor', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('identification_tutor') ? 'has-error' : ''}}">
    <label for="identification" class="col-md-4 control-label">{{ 'Cedula*' }}</label>
    <div class="col-md-2">
        <input class="form-control" name="identification_tutor" type="text" id="identification_tutor" required>
        {!! $errors->first('identification_tutor', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('name_tutor') ? 'has-error' : ''}}">
    <label for="name_tutor" class="col-md-4 control-label">{{ 'Nombres*' }}</label>
    <div class="col-md-4">
        <input class="form-control" name="name_tutor" type="text" id="name_tutor" required onkeyup="this.value=this.value.toUpperCase()" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
        {!! $errors->first('name_tutor', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('last_name_tutor') ? 'has-error' : ''}}">
    <label for="last_name_tutor" class="col-md-4 control-label">{{ 'Apellidos*' }}</label>
    <div class="col-md-4">
        <input class="form-control" name="last_name_tutor" type="text" id="last_name_tutor" required onkeyup="this.value=this.value.toUpperCase()" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
        {!! $errors->first('last_name_tutor', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('phone_tutor') ? 'has-error' : ''}}">
    <label for="phone_tutor" class="col-md-4 control-label">{{ 'Telefono*' }}</label>
    <div class="col-md-2">
        <input class="form-control" name="phone_tutor" type="text" id="phone_tutor" required>
        {!! $errors->first('phone_tutor', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('email_tutor') ? 'has-error' : ''}}">
    <label for="email_tutor" class="col-md-4 control-label">{{ 'Correo Electronico*' }}</label>
    <div class="col-md-4">
        <input class="form-control" name="email_tutor" type="email_tutor" id="email_tutor" required>
        {!! $errors->first('email_tutor', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="col-lg-8 col-lg-offset-2">
    <hr>
</div>