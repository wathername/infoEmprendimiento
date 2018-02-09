<div class="form-group {{ $errors->has('state') ? 'has-error' : ''}}">
    <label for="state" class="col-md-4 control-label">{{ 'State' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="state" type="text" id="state" value="{{ $state->state or ''}}" >
        {!! $errors->first('state', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('iso_3166-2') ? 'has-error' : ''}}">
    <label for="iso_3166-2" class="col-md-4 control-label">{{ 'Iso 3166-2' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="iso_3166-2" type="text" id="iso_3166-2" value="{{ $state->iso_3166-2 or ''}}" >
        {!! $errors->first('iso_3166-2', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
