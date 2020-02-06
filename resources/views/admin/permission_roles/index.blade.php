@extends('layouts.admin.master', ['pageTitle' => 'Permission Roles'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="active">Permission Roles</li>
@endsection

@section('content')
    <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{ strtoupper('Permission Roles') }}
                        <div class="panel-action">
                            <a href="{{ route('permission-roles.create') }}"
                               class="btn btn-primary btn-wl">Add {{ strtolower('Permission Role') }}</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($permissionRoles->count() == 0)
                                <p class="p-20">There are no {{ strtolower('Permission Roles') }} available.</p>
                            @else
                                @include('admin.permission_roles.table')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
