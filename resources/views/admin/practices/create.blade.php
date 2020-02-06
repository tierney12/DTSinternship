@extends('layouts.admin.master', ['pageTitle' => 'Practices'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('practices.index') }}">Practices</a></li>
    <li class="active">Create {{ strtolower('Practice') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            @include('admin.practices.form')
        </div>
    </div>
@endsection
