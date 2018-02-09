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
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Create New AcademicDatum</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/academic-data') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/admin/academic-data') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('admin.academic-data.form')

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
