@extends('layouts.admin.master', ['pageTitle' => 'Estimate Details'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('estimate-details.index') }}">Estimate Details</a></li>
    <li class="active">Create {{ strtolower('Estimate Detail') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            @include('admin.estimate_details.form')
        </div>
    </div>
@endsection
