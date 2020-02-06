@extends('layouts.app', ['pageTitle' => 'Departments'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="active">Departments</li>
@endsection

@section('content')
    <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{ strtoupper('Departments') }}
                        <div class="panel-action">
                            <a href="{{ route('departments.create') }}"
                               class="btn btn-primary btn-wl">Add {{ strtolower('Department') }}</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($departments->count() == 0)
                                <p class="p-20">There are no {{ strtolower('Departments') }} available.</p>
                            @else
                                @include('admin.departments.table')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
