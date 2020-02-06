@extends('layouts.admin.master', ['pageTitle' => 'Role Users'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="active">Role Users</li>
@endsection

@section('content')
    <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{ strtoupper('Role Users') }}
                        <div class="panel-action">
                            <a href="{{ route('role-users.create') }}"
                               class="btn btn-primary btn-wl">Add {{ strtolower('Role User') }}</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($roleUsers->count() == 0)
                                <p class="p-20">There are no {{ strtolower('Role Users') }} available.</p>
                            @else
                                @include('admin.role_users.table')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
