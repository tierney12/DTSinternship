@extends('layouts.admin.master', ['pageTitle' => 'Permission Users'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('permission-users.index') }}">Permission Users</a></li>
    <li class="active">Create {{ strtolower('Permission User') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            @include('admin.permission_users.form')
        </div>
    </div>
@endsection
