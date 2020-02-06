@extends('layouts.admin.master', ['pageTitle' => 'Dentist Mailing Lists'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('dentist-mailing-lists.index') }}">Dentist Mailing Lists</a></li>
    <li class="active">Create {{ strtolower('Dentist Mailing List') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            @include('admin.dentist_mailing_list.form')
        </div>
    </div>
@endsection
