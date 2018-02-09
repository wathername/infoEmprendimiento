<div class="form-group {{ $errors->has('user') ? 'has-error' : ''}}">
    {!! Form::label('user', 'Usuario', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('user', null, ['class' => 'form-control', 'required', 'onkeyup="this.value=this.value.toUpperCase()" onfocus="this.value="";" onblur="if (this.value == "") {this.value ="";}"']) !!}
        {!! $errors->first('user', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    {!! Form::label('email', 'Email', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('email', null, ['class' => 'form-control', 'required']) !!}
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('profession') ? 'has-error' : ''}}">
    {!! Form::label('profession', 'Profesion', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('profession', $user->profession->profession, ['class' => 'form-control', 'required', 'readonly']) !!}
        {!! $errors->first('profession', '<p class="help-block">:message</p>') !!}
    </div>
</div>
@if(\Illuminate\Support\Facades\Auth::user()->role_id == '1')
<div class="form-group {{ $errors->has('role_id') ? 'has-error' : ''}}">
    {!! Form::label('role_id', 'Role', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('role_id', $role, old('category_service_id'), ['class' => 'form-control', 'required']) !!}
        {!! $errors->first('role_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('statu_id') ? 'has-error' : ''}}">
    {!! Form::label('statu_id', 'Statu', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('statu_id', $statu, old('category_service_id'), ['class' => 'form-control', 'required']) !!}
        {!! $errors->first('statu_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
@endif

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary btn-block btn-md']) !!}
    </div>
</div>
