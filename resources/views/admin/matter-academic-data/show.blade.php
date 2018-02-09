@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">MatterAcademicDatum {{ $matteracademicdatum->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/matter-academic-data') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/matter-academic-data/' . $matteracademicdatum->id . '/edit') }}" title="Edit MatterAcademicDatum"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/matteracademicdata' . '/' . $matteracademicdatum->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-xs" title="Delete MatterAcademicDatum" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $matteracademicdatum->id }}</td>
                                    </tr>
                                    <tr><th> Academic Data Id </th><td> {{ $matteracademicdatum->academic_data_id }} </td></tr><tr><th> Matter Id </th><td> {{ $matteracademicdatum->matter_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
