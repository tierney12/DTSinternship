@extends('layouts.admin.master', ['pageTitle' => 'exceptions'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('exceptions.index') }}">exceptions</a></li>
    <li class="active">Edit {{ strtolower('Exceptions') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            <form method="POST"
                  action="{{ route('pricebands.update', $priceband) }}">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="panel">
                    <div class="panel-body">
                        @include('admin.exceptions.fields')
                    </div>
                </div>

                <!-- Submit Field -->
                <div class="row">
                    <div class="col-sm-12 form-group text-right">
                        <input type="submit" class="btn btn-success" value="Save">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
