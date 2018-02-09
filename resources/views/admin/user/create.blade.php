@extends('layouts.app_admin')

@section('content')
    <div class="right_col" role="main">
        <div class="page-title">
            <div class="title_left">
                <h3><small></small></h3>
            </div>
        </div>
        <div class="col-md-12">
            <div class="container">
                <div class="panel panel-default">
                    <div class="panel-heading">Create New User</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/user') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/admin/user') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                                <label for="name" class="col-md-4 control-label">{{ 'Name' }}</label>
                                <div class="col-md-6">
                                    <input class="form-control" name="name" type="text" id="name" value="{{ $user->name or ''}}" >
                                    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div><div class="form-group {{ $errors->has('last_name') ? 'has-error' : ''}}">
                                <label for="last_name" class="col-md-4 control-label">{{ 'Last Name' }}</label>
                                <div class="col-md-6">
                                    <input class="form-control" name="last_name" type="text" id="last_name" value="{{ $user->last_name or ''}}" >
                                    {!! $errors->first('last_name', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>

                            @include ('admin.user.form')

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
