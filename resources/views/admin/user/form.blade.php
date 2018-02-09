
<div class="form-group {{ $errors->has('profession') ? 'has-error' : ''}}">
    <label for="profession" class="col-md-4 control-label">{{ 'Profesion' }}</label>
    <div class="col-md-6">
        <select id="profession" class="form-control" name="profession" value="{{ old('profession') }}" required autofocus>
            <option value="1">Estudiante</option>
            <option value="2">Profesor</option>
        </select>
    </div>
</div>
<div class="form-group {{ $errors->has('user') ? 'has-error' : ''}}">
    <label for="user" class="col-md-4 control-label">{{ 'User' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="user" type="text" id="user" value="{{ $user->user or ''}}" >
        {!! $errors->first('user', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="col-md-4 control-label">{{ 'Email' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="email" type="text" id="email" value="{{ $user->email or ''}}" >
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
    <label for="password" class="col-md-4 control-label">{{ 'Password' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="password" type="password" id="password" value="{{ $user->password or ''}}" >
        {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('password-confirm') ? 'has-error' : ''}}">
    <label for="password-confirm" class="col-md-4 control-label">{{ 'Confirm Password' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="password_confirmation" type="password" id="password-confirm" value="{{ $user->password or ''}}" >
        {!! $errors->first('password-confirm', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('role_id') ? 'has-error' : ''}}">
    <label for="role_id" class="col-md-4 control-label">{{ 'Role Id' }}</label>
    <div class="col-md-6">
        {!! Form::select('role_id', $role, old('role_id'), ['class' => 'form-control', 'required']) !!}
        {!! $errors->first('role_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('statu_id') ? 'has-error' : ''}}">
    <label for="statu_id" class="col-md-4 control-label">{{ 'Statu Id' }}</label>
    <div class="col-md-6">
        {!! Form::select('statu_id', $statu, old('statu_id'), ['class' => 'form-control', 'required']) !!}
        {!! $errors->first('statu_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
