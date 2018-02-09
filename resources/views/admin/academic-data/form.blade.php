<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="col-md-4 control-label">{{ 'User Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="user_id" type="number" id="user_id" value="{{ $academicdatum->user_id or ''}}" required>
        {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('period_id') ? 'has-error' : ''}}">
    <label for="period_id" class="col-md-4 control-label">{{ 'Period Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="period_id" type="number" id="period_id" value="{{ $academicdatum->period_id or ''}}" required>
        {!! $errors->first('period_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
