@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">TutorDatum {{ $tutordatum->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/tutor-data') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/tutor-data/' . $tutordatum->id . '/edit') }}" title="Edit TutorDatum"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/tutordata' . '/' . $tutordatum->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-xs" title="Delete TutorDatum" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $tutordatum->id }}</td>
                                    </tr>
                                    <tr><th> Personal Information Id </th><td> {{ $tutordatum->personal_information_id }} </td></tr><tr><th> Company Data </th><td> {{ $tutordatum->company_data }} </td></tr><tr><th> Statu Id </th><td> {{ $tutordatum->statu_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
