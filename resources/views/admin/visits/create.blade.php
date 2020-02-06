@extends('layouts.admin.master', ['pageTitle' => 'Visits'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('visits.index') }}">Visits</a></li>
    <li class="active">Create {{ strtolower('Visit') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            @include('admin.visits.form')
        </div>
    </div>
@endsection
