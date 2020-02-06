@extends('layouts.admin.master', ['pageTitle' => 'Staff'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('staff.index') }}">Staff</a></li>
    <li class="active">Create {{ strtolower('Staff') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            @include('admin.staff.form')
        </div>
    </div>
@endsection
