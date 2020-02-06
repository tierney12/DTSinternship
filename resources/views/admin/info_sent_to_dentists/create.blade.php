@extends('layouts.admin.master', ['pageTitle' => 'Info Sent To Dentists'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('info-sent-to-dentists.index') }}">Info Sent To Dentists</a></li>
    <li class="active">Create {{ strtolower('Info Sent To Dentist') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            @include('admin.info_sent_to_dentists.form')
        </div>
    </div>
@endsection
