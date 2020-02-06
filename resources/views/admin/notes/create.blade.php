@extends('layouts.admin.master', ['pageTitle' => 'Notes'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('notes.index') }}">Notes</a></li>
    <li class="active">Create {{ strtolower('Note') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            @include('admin.notes.form')
        </div>
    </div>
@endsection
