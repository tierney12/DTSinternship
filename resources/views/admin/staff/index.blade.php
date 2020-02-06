@extends('layouts.admin.master', ['pageTitle' => 'Staff'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="active">Staff</li>
@endsection

@section('content')
    <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{ strtoupper('Staff') }}
                        <div class="panel-action">
                            <a href="{{ route('staff.create') }}"
                               class="btn btn-primary btn-wl">Add {{ strtolower('Staff') }}</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($staff->count() == 0)
                                <p class="p-20">There are no {{ strtolower('Staff') }} available.</p>
                            @else
                                @include('admin.staff.table')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
