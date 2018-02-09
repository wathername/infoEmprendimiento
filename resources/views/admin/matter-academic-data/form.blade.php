<div class="form-group {{ $errors->has('academic_data_id') ? 'has-error' : ''}}">
    <label for="academic_data_id" class="col-md-4 control-label">{{ 'Academic Data Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="academic_data_id" type="number" id="academic_data_id" value="{{ $matteracademicdatum->academic_data_id or ''}}" >
        {!! $errors->first('academic_data_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('matter_id') ? 'has-error' : ''}}">
    <label for="matter_id" class="col-md-4 control-label">{{ 'Matter Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="matter_id" type="number" id="matter_id" value="{{ $matteracademicdatum->matter_id or ''}}" >
        {!! $errors->first('matter_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
