@extends('layouts.admin.master', ['pageTitle' => 'Job Errors'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('job-errors.index') }}">Job Errors</a></li>
    <li class="active">Edit {{ strtolower('Job Error') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            <form method="POST"
                  action="{{ route('job-errors.update', $jobError) }}">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="panel">
                    <div class="panel-body">
                        @include('admin.job_errors.fields')
                    </div>
                </div>

                <!-- Submit Field -->
                <div class="row">
                    <div class="col-sm-12 form-group text-right">
                        <input type="submit" class="btn btn-success" value="Save">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
