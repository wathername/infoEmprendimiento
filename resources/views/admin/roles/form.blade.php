<div class="form-group {{ $errors->has('role') ? 'has-error' : ''}}">
    <label for="role" class="col-md-4 control-label">{{ 'Role' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="role" type="text" id="role" value="{{ $role->role or ''}}" required>
        {!! $errors->first('role', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
