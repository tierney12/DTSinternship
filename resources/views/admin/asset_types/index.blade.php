@extends('layouts.admin.master', ['pageTitle' => 'Asset Types'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="active">Asset Types</li>
@endsection

@section('content')
    <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{ strtoupper('Asset Types') }}
                        <div class="panel-action">
                            <a href="{{ route('asset-types.create') }}"
                               class="btn btn-primary btn-wl">Add {{ strtolower('Asset Type') }}</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($assetTypes->count() == 0)
                                <p class="p-20">There are no {{ strtolower('Asset Types') }} available.</p>
                            @else
                                @include('admin.asset_types.table')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
