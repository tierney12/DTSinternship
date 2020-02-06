@extends('layouts.admin.master', ['pageTitle' => 'Estimates'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('estimates.index') }}">Estimates</a></li>
    <li class="active">Create {{ strtolower('Estimate') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            @include('admin.estimates.form')
        </div>
    </div>
@endsection
