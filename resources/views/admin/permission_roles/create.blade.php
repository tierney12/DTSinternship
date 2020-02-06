@extends('layouts.admin.master', ['pageTitle' => 'Permission Roles'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('permission-roles.index') }}">Permission Roles</a></li>
    <li class="active">Create {{ strtolower('Permission Role') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            @include('admin.permission_roles.form')
        </div>
    </div>
@endsection
