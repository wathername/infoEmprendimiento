<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="col-md-4 control-label">{{ 'Email' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="email" type="text" id="email" value="{{ $companydatum->email or ''}}" >
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('web_side') ? 'has-error' : ''}}">
    <label for="web_side" class="col-md-4 control-label">{{ 'Web Side' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="web_side" type="text" id="web_side" value="{{ $companydatum->web_side or ''}}" >
        {!! $errors->first('web_side', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('economic_activity') ? 'has-error' : ''}}">
    <label for="economic_activity" class="col-md-4 control-label">{{ 'Economic Activity' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="economic_activity" type="text" id="economic_activity" value="{{ $companydatum->economic_activity or ''}}" >
        {!! $errors->first('economic_activity', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('personal_information_id') ? 'has-error' : ''}}">
    <label for="personal_information_id" class="col-md-4 control-label">{{ 'Personal Information Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="personal_information_id" type="number" id="personal_information_id" value="{{ $companydatum->personal_information_id or ''}}" >
        {!! $errors->first('personal_information_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="col-md-4 control-label">{{ 'User Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="user_id" type="number" id="user_id" value="{{ $companydatum->user_id or ''}}" >
        {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('statu_id') ? 'has-error' : ''}}">
    <label for="statu_id" class="col-md-4 control-label">{{ 'Statu Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="statu_id" type="number" id="statu_id" value="{{ $companydatum->statu_id or ''}}" >
        {!! $errors->first('statu_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
