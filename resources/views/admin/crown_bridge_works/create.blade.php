@extends('layouts.app', ['pageTitle' => 'Crown Bridge Works'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('crown-bridge-works.index') }}">Crown Bridge Works</a></li>
    <li class="active">Create {{ strtolower('Crown Bridge Work') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            @include('admin.crown_bridge_works.form')
        </div>
    </div>
@endsection
