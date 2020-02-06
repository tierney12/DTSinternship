@extends('layouts.admin.master', ['pageTitle' => 'Remake Reasons'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('remake-reasons.index') }}">Remake Reasons</a></li>
    <li class="active">Create {{ strtolower('Remake Reason') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            @include('admin.remake_reasons.form')
        </div>
    </div>
@endsection
