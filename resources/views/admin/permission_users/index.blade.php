@extends('layouts.admin.master', ['pageTitle' => 'Permission Users'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="active">Permission Users</li>
@endsection

@section('content')
    <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{ strtoupper('Permission Users') }}
                        <div class="panel-action">
                            <a href="{{ route('permission-users.create') }}"
                               class="btn btn-primary btn-wl">Add {{ strtolower('Permission User') }}</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($permissionUsers->count() == 0)
                                <p class="p-20">There are no {{ strtolower('Permission Users') }} available.</p>
                            @else
                                @include('admin.permission_users.table')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
