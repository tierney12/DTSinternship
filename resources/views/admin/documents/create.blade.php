@extends('layouts.admin.master', ['pageTitle' => 'Documents'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('documents.index') }}">Documents</a></li>
    <li class="active">Create {{ strtolower('Document') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            @include('admin.documents.form')
        </div>
    </div>
@endsection
