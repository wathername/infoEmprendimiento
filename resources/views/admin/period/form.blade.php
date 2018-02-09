<div class="form-group {{ $errors->has('period') ? 'has-error' : ''}}">
    <label for="period" class="col-md-4 control-label">{{ 'Period' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="period" type="text" id="period" value="{{ $period->period or ''}}" required>
        {!! $errors->first('period', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
