@extends('layouts.admin.master', ['pageTitle' => 'Lab Sheets'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="active">Lab Sheets</li>
@endsection

@section('content')
    <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{ strtoupper('Lab Sheets') }}
                        <div class="panel-action">
                            <a href="{{ route('lab-sheets.create') }}"
                               class="btn btn-primary btn-wl">Add {{ strtolower('Lab Sheet') }}</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($labSheets->count() == 0)
                                <p class="p-20">There are no {{ strtolower('Lab Sheets') }} available.</p>
                            @else
                                @include('admin.lab_sheets.table')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
