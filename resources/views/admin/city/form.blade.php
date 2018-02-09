<div class="form-group {{ $errors->has('state_id') ? 'has-error' : ''}}">
    <label for="state_id" class="col-md-4 control-label">{{ 'State Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="state_id" type="number" id="state_id" value="{{ $city->state_id or ''}}" >
        {!! $errors->first('state_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('state') ? 'has-error' : ''}}">
    <label for="state" class="col-md-4 control-label">{{ 'State' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="state" type="text" id="state" value="{{ $city->state or ''}}" >
        {!! $errors->first('state', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('capital') ? 'has-error' : ''}}">
    <label for="capital" class="col-md-4 control-label">{{ 'Capital' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="capital" type="text" id="capital" value="{{ $city->capital or ''}}" >
        {!! $errors->first('capital', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
