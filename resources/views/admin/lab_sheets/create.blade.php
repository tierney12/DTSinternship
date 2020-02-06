@extends('layouts.admin.master', ['pageTitle' => 'Lab Sheets'])

@section('breadcrumbs')
    <ol class="breadcrumb" style="padding-right: 20px;">
        <li><a href="/">Home</a></li>
        <li><a href="/">Lab Sheets</a></li>
        <li class="active">Create</li>
    </ol>
@endsection

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('lab-sheets.index') }}">Lab Sheets</a></li>
    <li class="active">Create {{ strtolower('Lab Sheet') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            @include('admin.lab_sheets.form')
        </div>
    </div>
@endsection
