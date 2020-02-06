@extends('layouts.admin.master', ['pageTitle' => 'Permissions'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="active">Permissions</li>
@endsection

@section('content')
    <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{ strtoupper('Permissions') }}
                        <div class="panel-action">
                            <a href="{{ route('permissions.create') }}"
                               class="btn btn-primary btn-wl">Add {{ strtolower('Permission') }}</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($permissions->count() == 0)
                                <p class="p-20">There are no {{ strtolower('Permissions') }} available.</p>
                            @else
                                @include('admin.permissions.table')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
