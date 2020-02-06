@extends('layouts.admin.master', ['pageTitle' => 'Role Users'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('role-users.index') }}">Role Users</a></li>
    <li class="active">Create {{ strtolower('Role User') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            @include('admin.role_users.form')
        </div>
    </div>
@endsection
