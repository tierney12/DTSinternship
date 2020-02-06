@extends('layouts.admin.master', ['pageTitle' => 'Checklists'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('checklists.index') }}">Checklists</a></li>
    <li class="active">Create {{ strtolower('Checklists') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            @include('admin.checklists.form')
        </div>
    </div>
@endsection
