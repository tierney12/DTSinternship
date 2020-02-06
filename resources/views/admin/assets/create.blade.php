@extends('layouts.admin.master', ['pageTitle' => 'Assets'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('assets.index') }}">Assets</a></li>
    <li class="active">Create {{ strtolower('Asset') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            @include('admin.assets.form')
        </div>
    </div>
@endsection
