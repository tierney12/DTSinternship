@extends('layouts.admin.master', ['pageTitle' => 'Info Sent To Dentist'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('info-sent-to-dentists.index') }}">Info Sent To Dentists</a></li>
    <li class="active">InfoSentToDentist Details</li>
@endsection

@section('buttons')
    <div class="pull-right p-l-10">
        <a href="{{ route('info-sent-to-dentists.edit', $infoSentToDentist) }}" class="btn btn-info">Edit</a>
        <button type="button" class="btn btn-danger delete-button" data-url="{{ route('info-sent-to-dentists.destroy', $infoSentToDentist) }}">
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
                                @include('admin.info_sent_to_dentists.show_fields')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    
@endsection
