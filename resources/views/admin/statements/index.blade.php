@extends('layouts.admin.master', ['pageTitle' => 'Statements'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="active">Statements</li>
@endsection

@section('content')
    <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{ strtoupper('Statements') }}
                        <div class="panel-action">
                            <a href="{{ route('statements.create') }}"
                               class="btn btn-primary btn-wl">Add {{ strtolower('Statement') }}</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($statements->count() == 0)
                                <p class="p-20">There are no {{ strtolower('Statements') }} available.</p>
                            @else
                                @include('admin.statements.table')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
