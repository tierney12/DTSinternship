@extends('layouts.app', ['pageTitle' => 'Checklists'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="active">Checklists</li>
@endsection

@section('content')
    <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{ strtoupper('Checklists') }}
                        <div class="panel-action">
                            <a href="{{ route('checklists.create') }}"
                               class="btn btn-primary btn-wl">Add {{ strtolower('Checklist') }}</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($checklists->count() == 0)
                                <p class="p-20">There are no {{ strtolower('Checklists') }} available.</p>
                            @else
                                @include('admin.checklists.table')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
