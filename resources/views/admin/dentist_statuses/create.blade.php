@extends('layouts.admin.master', ['pageTitle' => 'Dentist Statuses'])

@section('section-title')
    <h4 class="page-title">Create</h4>
@endsection

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('dentist-statuses.index') }}">Dentist Statuses</a></li>
    <li class="active">Create {{ strtolower('Dentist Status') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            @include('admin.dentist_statuses.form')
        </div>
    </div>
@endsection
