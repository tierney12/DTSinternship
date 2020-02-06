@extends('layouts.app', ['pageTitle' => 'Job Work'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('job-works.index') }}">Job Works</a></li>
    <li class="active">JobWork Details</li>
@endsection

@section('buttons')
    <div class="pull-right p-l-10">
        <a href="{{ route('job-works.edit', $jobWork) }}" class="btn btn-info">Edit</a>
        <button type="button" class="btn btn-danger delete-button" data-url="{{ route('job-works.destroy', $jobWork) }}">
            Delete
        </button>
    </div>
@endsection

@section('content')
    <div class="panel">
        <div class="panel-body">
            <div class="row">
                    <div class="col-sm-12">
                        <div class="d-table">
                            <div class="t-cell">
                                @include('admin.job_works.show_fields')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    
@endsection
