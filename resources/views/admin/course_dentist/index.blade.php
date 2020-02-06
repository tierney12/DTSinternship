@extends('layouts.admin.master', ['pageTitle' => 'Course Dentists'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="active">Course Dentists</li>
@endsection

@section('content')
    <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{ strtoupper('Course Dentists') }}
                        <div class="panel-action">
                            <a href="{{ route('course-dentists.create') }}"
                               class="btn btn-primary btn-wl">Add {{ strtolower('Course Dentist') }}</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($courseDentists->count() == 0)
                                <p class="p-20">There are no {{ strtolower('Course Dentists') }} available.</p>
                            @else
                                @include('admin.course_dentist.table')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
