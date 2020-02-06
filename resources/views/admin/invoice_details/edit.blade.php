@extends('layouts.admin.master', ['pageTitle' => 'Invoice Details'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('invoice-details.index') }}">Invoice Details</a></li>
    <li class="active">Edit {{ strtolower('Invoice Detail') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            <form method="POST"
                  action="{{ route('invoice-details.update', $invoiceDetail) }}">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="panel">
                    <div class="panel-body">
                        @include('admin.invoice_details.fields')
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
