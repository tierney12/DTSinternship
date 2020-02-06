@extends('layouts.admin.master', ['pageTitle' => 'Activities'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('activities.index') }}">Activities</a></li>
    <li class="active">Create {{ strtolower('Activity') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            @include('admin.activities.form')
        </div>
    </div>
@endsection
