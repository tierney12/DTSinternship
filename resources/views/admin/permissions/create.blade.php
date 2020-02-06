@extends('layouts.admin.master', ['pageTitle' => 'Permissions'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('permissions.index') }}">Permissions</a></li>
    <li class="active">Create {{ strtolower('Permission') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            @include('admin.permissions.form')
        </div>
    </div>
@endsection
