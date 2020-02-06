@extends('layouts.admin.master', ['pageTitle' => 'Roles'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('roles.index') }}">Roles</a></li>
    <li class="active">Create {{ strtolower('Role') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            @include('admin.roles.form')
        </div>
    </div>
@endsection
