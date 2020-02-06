@extends('layouts.admin.master', ['pageTitle' => 'Courses'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="active">Courses</li>
@endsection

@section('content')
    <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{ strtoupper('Courses') }}
                        <div class="panel-action">
                            <a href="{{ route('courses.create') }}"
                               class="btn btn-primary btn-wl">Add {{ strtolower('Course') }}</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($courses->count() == 0)
                                <p class="p-20">There are no {{ strtolower('Courses') }} available.</p>
                            @else
                                @include('admin.courses.table')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
