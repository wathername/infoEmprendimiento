<div class="form-group {{ $errors->has('profession') ? 'has-error' : ''}}">
    <label for="profession" class="col-md-4 control-label">{{ 'Profession' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="profession" type="text" id="profession" value="{{ $profession->profession or ''}}" required>
        {!! $errors->first('profession', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
