@extends('layouts.admin.master', ['pageTitle' => 'Statements'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('statements.index') }}">Statements</a></li>
    <li class="active">Create {{ strtolower('Statement') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            @include('admin.statements.form')
        </div>
    </div>
@endsection
