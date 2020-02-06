@extends('layouts.admin.master', ['pageTitle' => 'Popups'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('popups.index') }}">Popups</a></li>
    <li class="active">Create {{ strtolower('Popup') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            @include('admin.popups.form')
        </div>
    </div>
@endsection
