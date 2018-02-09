<div class="form-group {{ $errors->has('personal_information_id') ? 'has-error' : ''}}">
    <label for="personal_information_id" class="col-md-4 control-label">{{ 'Personal Information Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="personal_information_id" type="number" id="personal_information_id" value="{{ $tutordatum->personal_information_id or ''}}" >
        {!! $errors->first('personal_information_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('company_data') ? 'has-error' : ''}}">
    <label for="company_data" class="col-md-4 control-label">{{ 'Company Data' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="company_data" type="number" id="company_data" value="{{ $tutordatum->company_data or ''}}" >
        {!! $errors->first('company_data', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('statu_id') ? 'has-error' : ''}}">
    <label for="statu_id" class="col-md-4 control-label">{{ 'Statu Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="statu_id" type="number" id="statu_id" value="{{ $tutordatum->statu_id or ''}}" >
        {!! $errors->first('statu_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
