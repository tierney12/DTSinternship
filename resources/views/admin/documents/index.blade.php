@extends('layouts.admin.master', ['pageTitle' => 'Documents'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="active">Documents</li>
@endsection

@section('content')
    <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{ strtoupper('Documents') }}
                        <div class="panel-action">
                            <a href="{{ route('documents.create') }}"
                               class="btn btn-primary btn-wl">Add {{ strtolower('Document') }}</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($documents->count() == 0)
                                <p class="p-20">There are no {{ strtolower('Documents') }} available.</p>
                            @else
                                @include('admin.documents.table')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
