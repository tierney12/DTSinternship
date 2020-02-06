@extends('layouts.admin.master', ['pageTitle' => 'Areas'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('areas.index') }}">Areas</a></li>
    <li class="active">Create {{ strtolower('Area') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            @include('admin.areas.form')
        </div>
    </div>
@endsection
