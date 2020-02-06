@extends('layouts.admin.master', ['pageTitle' => 'Asset Types'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('asset-types.index') }}">Asset Types</a></li>
    <li class="active">Create {{ strtolower('Asset Type') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            @include('admin.asset_types.form')
        </div>
    </div>
@endsection
