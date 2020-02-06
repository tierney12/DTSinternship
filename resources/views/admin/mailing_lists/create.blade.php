@extends('layouts.admin.master', ['pageTitle' => 'Mailing Lists'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('mailing-lists.index') }}">Mailing Lists</a></li>
    <li class="active">Create {{ strtolower('Mailing List') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            @include('admin.mailing_lists.form')
        </div>
    </div>
@endsection
