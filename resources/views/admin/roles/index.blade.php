@extends('layouts.admin.master', ['pageTitle' => 'Roles'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="active">Roles</li>
@endsection

@section('content')
    <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{ strtoupper('Roles') }}
                        <div class="panel-action">
                            <a href="{{ route('roles.create') }}"
                               class="btn btn-primary btn-wl">Add {{ strtolower('Role') }}</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($roles->count() == 0)
                                <p class="p-20">There are no {{ strtolower('Roles') }} available.</p>
                            @else
                                @include('admin.roles.table')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
