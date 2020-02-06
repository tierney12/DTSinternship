@extends('layouts.admin.master', ['pageTitle' => 'Dentist Spends'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('dentist-spends.index') }}">Dentist Spends</a></li>
    <li class="active">Create {{ strtolower('Dentist Spend') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            @include('admin.dentist_spends.form')
        </div>
    </div>
@endsection
