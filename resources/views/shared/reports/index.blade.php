@extends('layouts.admin.master')

@section('section-title')
    <h4 class="page-title">Welcome {{ $exampleUser['firstname'] }}</h4>
@endsection

@section('breadcrumbs')
    <ol class="breadcrumb" style="padding-right: 20px;">
        <li><a href="/">Home</a></li>
        <li class="active">Reports</li>
    </ol>
@endsection

@section('content')
    {{-- <style>
        .reports-buttons {
            padding-top: 50px;
            padding-bottom: 50px;
            padding-left: 20px;
            padding-right: 20px;
            border-radius: 50px;
            min-width: 240px;
            max-width: 240px;
            max-height: 180px;
            text-align: center;
        }
        .button-text {
            font-size: 1.6em;
            text-align: center;
        }
        .icon-size {
            font-size: 1.6em;
            text-align: center;
        }
        .button-row {
            margin-top: 200px;
        }
    </style> --}}

    <div class="row">
        <div class="col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box">
                <div class="vtabs" style="width: 100%">
                    <ul class="nav tabs-vertical">
                        <li class="tab active">
                            <a data-toggle="tab" href="#jobs" aria-expanded="true"> <span class="visible-xs"><i class="ti-home"></i></span> <span class="hidden-xs">Jobs Report</span> </a>
                        </li>
                        <li class="tab">
                            <a data-toggle="tab" href="#turnover" aria-expanded="false"> <span class="visible-xs"><i class="ti-user"></i></span> <span class="hidden-xs">Turnover Report</span> </a>
                        </li>
                        <li class="tab">
                            <a aria-expanded="false" data-toggle="tab" href="#accuracy"> <span class="visible-xs"><i class="ti-email"></i></span> <span class="hidden-xs">Accuracy Report</span> </a>
                        </li><li class="tab">
                            <a aria-expanded="false" data-toggle="tab" href="#input-error"> <span class="visible-xs"><i class="ti-email"></i></span> <span class="hidden-xs">Input Error Report</span> </a>
                        </li>
                        <li class="tab">
                            <a aria-expanded="false" data-toggle="tab" href="#lab-production"> <span class="visible-xs"><i class="ti-email"></i></span> <span class="hidden-xs">Lab Production Report</span> </a>
                        </li>
                        <li class="tab">
                            <a aria-expanded="false" data-toggle="tab" href="#turnover-practice"> <span class="visible-xs"><i class="ti-email"></i></span> <span class="hidden-xs">Turnover by Practice</span> </a>
                        </li>
                        <li class="tab">
                            <a aria-expanded="false" data-toggle="tab" href="#turnover-area"> <span class="visible-xs"><i class="ti-email"></i></span> <span class="hidden-xs">Turnover by Area</span> </a>
                        </li>
                        <li class="tab">
                            <a aria-expanded="false" data-toggle="tab" href="#top-50-unit-value"> <span class="visible-xs"><i class="ti-email"></i></span> <span class="hidden-xs">Top 50 Dentists by Unit Value</span> </a>
                        </li>
                        <li class="tab">
                            <a aria-expanded="false" data-toggle="tab" href="#top-50-percentage"> <span class="visible-xs"><i class="ti-email"></i></span> <span class="hidden-xs">Top 50 Dentists by % Difference</span> </a>
                        </li>
                        <li class="tab">
                            <a aria-expanded="false" data-toggle="tab" href="#top-50-unit-diff"> <span class="visible-xs"><i class="ti-email"></i></span> <span class="hidden-xs">Top 50 Dentists + Unit Difference</span> </a>
                        </li>
                        <li class="tab">
                            <a aria-expanded="false" data-toggle="tab" href="#top-20-unit-diff"> <span class="visible-xs"><i class="ti-email"></i></span> <span class="hidden-xs">Top 20 Dentists by Unit Difference</span> </a>
                        </li>
                        <li class="tab">
                            <a aria-expanded="false" data-toggle="tab" href="#bottom-20-unit-diff"> <span class="visible-xs"><i class="ti-email"></i></span> <span class="hidden-xs">Bottom 20 Dentist Dentists by Unit Difference</span> </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="jobs" class="tab-pane active">
                            @include('shared.reports.includes.jobs_report')
                        </div>
                        <div id="turnover" class="tab-pane">
                            @include('shared.reports.includes.turnover_report')
                        </div>
                        <div id="accuracy" class="tab-pane">
                            @include('shared.reports.includes.accuracy_report')
                        </div>
                        <div id="input-error" class="tab-pane">
                            @include('shared.reports.includes.input_error_report')
                        </div>
                        <div id="lab-production" class="tab-pane">
                            @include('shared.reports.includes.lab_production_report')
                        </div>
                        <div id="turnover-practice" class="tab-pane">
                            @include('shared.reports.includes.turnover_by_practice_report')
                        </div>
                        <div id="turnover-area" class="tab-pane">
                            @include('shared.reports.includes.turnover_by_area_report')
                        </div>
                        <div id="top-50-unit-value" class="tab-pane">
                            @include('shared.reports.includes.top_50_dentists_unit_value_report')
                        </div>
                        <div id="top-50-percentage" class="tab-pane">
                            @include('shared.reports.includes.top_50_dentists_percentage_report')
                        </div>
                        <div id="top-50-unit-diff" class="tab-pane">
                            @include('shared.reports.includes.top_50_dentists_unit_diff_report')
                        </div>
                        <div id="top-20-unit-diff" class="tab-pane">
                            @include('shared.reports.includes.top_20_dentists_unit_diff_report')
                        </div>
                        <div id="bottom-20-unit-diff" class="tab-pane">
                            @include('shared.reports.includes.bottom_20_dentists_unit_diff_report')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row button-row">
        <div class="col-md-10 col-md-offset-1">
            <div class="button-box text-center">
                <a href="/reports/weekly"><button class="btn btn-outline btn-primary reports-buttons"> <i class="fa fa-calendar m-r-5 icon-size"></i> <span class="button-text">Daily</span></button></a>
                <a href="/reports/weekly"><button class="btn btn-outline btn-primary reports-buttons"> <i class="fa fa-calendar m-r-5 icon-size"></i> <span class="button-text">Weekly</span></button></a>
                <a href="/reports/weekly"><button class="btn btn-outline btn-primary reports-buttons"> <i class="fa fa-calendar m-r-5 icon-size"></i> <span class="button-text">Monthly</span></button></a>
                <a href="/reports/weekly"><button class="btn btn-outline btn-primary reports-buttons"> <i class="fa fa-calendar m-r-5 icon-size"></i> <span class="button-text">Yearly</span></button></a>
            </div>
        </div>
    </div>
@endsection