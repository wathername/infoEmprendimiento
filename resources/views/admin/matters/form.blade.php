<div class="form-group {{ $errors->has('matter') ? 'has-error' : ''}}">
    <label for="matter" class="col-md-4 control-label">{{ 'Matter' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="matter" type="text" id="matter" value="{{ $matter->matter or ''}}" required>
        {!! $errors->first('matter', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
