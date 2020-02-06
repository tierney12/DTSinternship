@extends('layouts.admin.master', ['pageTitle' => 'Visit Details'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('visit-details.index') }}">Visit Details</a></li>
    <li class="active">Create {{ strtolower('Visit Detail') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            @include('admin.visit_details.form')
        </div>
    </div>
@endsection
