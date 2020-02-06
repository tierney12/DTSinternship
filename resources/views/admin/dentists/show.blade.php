@extends('layouts.admin.master', ['pageTitle' => 'Dentist'])

@section('section-title')
    <h4 class="page-title">{{$dentist->title . " " . $dentist->firstname ." " . $dentist->surname}}</h4>
@endsection

@section('breadcrumbs')
    <ol class="breadcrumb" style="padding-right: 20px;">
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ route('dentists.index') }}">Dentists</a></li>
        <li class="active">Dentist Details</li>
    </ol>
@endsection

@section('content')
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="white-box">
            <!-- Nav tabs -->
            <ul class="nav customtab nav-tabs" id="mytab" role="tablist">
                <li role="presentation" class="nav-item active"><a class="nav-link active" id="dentist-tab" href="#tab1" aria-controls="home" role="tab" data-toggle="tab" aria-selected="true"><span class="visible-xs"><i class="ti-home"></i></span><span class="hidden-xs"> Dentist Details</span></a></li>
                <li role="presentation" class="nav-item"><a class="nav-link" id="jobs-tab" href="#tab2" aria-controls="profile" role="tab" data-toggle="tab" aria-selected="false"><span class="visible-xs"><i class="ti-user"></i></span> <span class="hidden-xs">Jobs</span></a></li>
                <li role="presentation" class="nav-item"><a class="nav-link" id="invoices-tab" href="#tab3" aria-controls="messages" role="tab" data-toggle="tab" aria-selected="false"><span class="visible-xs"><i class="ti-email"></i></span> <span class="hidden-xs">Invoices</span></a></li>
                <li role="presentation" class="nav-item"><a class="nav-link" id="statements-tab" href="#tab4" aria-controls="settings" role="tab" data-toggle="tab" aria-selected="false"><span class="visible-xs"><i class="ti-settings"></i></span> <span class="hidden-xs">Statements</span></a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade active in" id="tab1" role="tabpanel" aria-labelledby="dentist-tab">
                    <div class="col-md-12">
                        @include('admin.dentists.partials.tab1')
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="jobs-tab">
                    <div class="col-md-12">
                        @include('admin.dentists.partials.tab2')
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="invoices-tab">
                    <div class="col-md-12">

                    </div>
                    <div class="clearfix"></div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="statements-tab">
                    <div class="col-md-12">

                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
@endsection