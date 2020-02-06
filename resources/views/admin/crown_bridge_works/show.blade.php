@extends('layouts.app', ['pageTitle' => 'Crown Bridge Work'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('crown-bridge-works.index') }}">Crown Bridge Works</a></li>
    <li class="active">CrownBridgeWork Details</li>
@endsection

@section('buttons')
    <div class="pull-right p-l-10">
        <a href="{{ route('crown-bridge-works.edit', $cb_work) }}" class="btn btn-info">Edit</a>
        <button type="button" class="btn btn-danger delete-button" data-url="{{ route('crown-bridge-works.destroy', $cb_work) }}">
            Delete
        </button>
    </div>
@endsection

@section('content')
    <div class="panel">
        <div class="panel-body">
            <div class="row">
                    <div class="col-sm-12">
                        <div class="d-table">
                            <div class="t-cell">
                                @include('admin.crown_bridge_works.show_fields')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    
@endsection
