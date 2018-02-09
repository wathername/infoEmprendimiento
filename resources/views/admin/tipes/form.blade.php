<div class="form-group {{ $errors->has('type') ? 'has-error' : ''}}">
    <label for="type" class="col-md-4 control-label">{{ 'Type' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="type" type="text" id="type" value="{{ $tipe->type or ''}}" required>
        {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
