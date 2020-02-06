@extends('layouts.app', ['pageTitle' => 'Pros Works'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('pros-works.index') }}">Pros Works</a></li>
    <li class="active">Create {{ strtolower('Pros Work') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            @include('admin.pros_works.form')
        </div>
    </div>
@endsection
