@extends('layouts.admin.master', ['pageTitle' => 'Course Dentist'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('course-dentists.index') }}">Course Dentists</a></li>
    <li class="active">CourseDentist Details</li>
@endsection

@section('buttons')
    <div class="pull-right p-l-10">
        <a href="{{ route('course-dentists.edit', $courseDentist) }}" class="btn btn-info">Edit</a>
        <button type="button" class="btn btn-danger delete-button" data-url="{{ route('course-dentists.destroy', $courseDentist) }}">
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
                                @include('admin.course_dentist.show_fields')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    
@endsection
