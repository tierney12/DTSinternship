@extends('layouts.admin.master', ['pageTitle' => 'Job'])

@section('breadcrumbs')
    <ol class="breadcrumb" style="padding-right: 20px;">
        <li><a href="/">Home</a></li>
        <li><a href="/jobs">Jobs</a></li>
        <li class="active">Details</li>
    </ol>
@endsection


@section('content')
    <link href="/plugins/bower_components/horizontal-timeline/css/horizontal-timeline.css" rel="stylesheet">

    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="white-box">
            <div class="row">
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <!-- Nav tabs -->
                    <ul class="nav customtab nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab1" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true"><span class="visible-xs"><i class="ti-home"></i></span><span class="hidden-xs"> Case Details</span></a></li>
                        <li role="presentation" class=""><a href="#tab2" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="ti-camera"></i></span> <span class="hidden-xs">Photos</span></a></li>
                        <li role="presentation" class=""><a href="#tab3" aria-controls="messages" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="ti-file"></i></span> <span class="hidden-xs">Documents</span></a></li>
                        <li role="presentation" class=""><a href="#tab4" aria-controls="settings" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="ti-time"></i></span> <span class="hidden-xs">History</span></a></li>
                        <li role="presentation" class=""><a href="#tab5" aria-controls="settings" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="ti-settings"></i></span> <span class="hidden-xs">Notes</span></a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="btn-group m-r-10 pull-right" style="margin-top: 5px;">
                        <button aria-expanded="false" data-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button">Dropdown <span class="caret"></span></button>
                        <ul role="menu" class="dropdown-menu">
                            <li><a href="javascript:void(0)">Attach a document</a></li>
                            <li><a href="javascript:void(0)">Upload a photo</a></li>
                            <li><a href="javascript:void(0)">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="javascript:void(0)">Separated link</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade active in" id="tab1">
                    <div class="col-md-12">
                        @include('admin.jobs.partials.tab1')
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab2">
                    <div class="col-md-12">
                        @include('admin.jobs.partials.tab2')
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab3">
                    <div class="col-md-12">
                        @include('admin.jobs.partials.tab3')
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab4">
                    <div class="col-md-12">
                        @include('admin.jobs.partials.tab1')
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab5">
                    <div class="col-md-12">
                        @include('admin.jobs.partials.tab5')
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

