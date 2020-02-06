@extends('layouts.admin.master', ['pageTitle' => 'Departments'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('departments.index') }}">Stocks</a></li>
    <li class="active">Create {{ strtolower('Departments') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            @include('admin.departments.form')
        </div>
    </div>
@endsection
