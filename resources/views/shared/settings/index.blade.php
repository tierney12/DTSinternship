@extends('layouts.admin.master')

@section('section-title')
    <h4 class="page-title">Settings</h4>
@endsection

@section('breadcrumbs')
    <ol class="breadcrumb" style="padding-right: 20px;">
        <li><a href="/">Home</a></li>
        <li class="active">Settings</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box">
                <div class="vtabs" style="width: 100%">
                    <ul class="nav tabs-vertical">
                        <li class="tab active">
                            <a data-toggle="tab" href="#areas" aria-expanded="true"> <span class="visible-xs"><i class="ti-home"></i></span> <span class="hidden-xs">Areas</span> </a>
                        </li>
                        <li class="tab">
                            <a aria-expanded="false" data-toggle="tab" href="#dentist_statuses"> <span class="visible-xs"><i class="ti-email"></i></span> <span class="hidden-xs">Dentist Statuses</span> </a>
                        </li>
                        <li class="tab">
                            <a aria-expanded="false" data-toggle="tab" href="#departments"> <span class="visible-xs"><i class="ti-email"></i></span> <span class="hidden-xs">Departments</span> </a>
                        </li>
                        <li class="tab">
                            <a aria-expanded="false" data-toggle="tab" href="#discounts"> <span class="visible-xs"><i class="ti-email"></i></span> <span class="hidden-xs">Discounts</span> </a>
                        </li>
                        <li class="tab">
                            <a aria-expanded="false" data-toggle="tab" href="#error_descriptions"> <span class="visible-xs"><i class="ti-email"></i></span> <span class="hidden-xs">Error Descriptions</span> </a>
                        </li>
                        <li class="tab">
                            <a aria-expanded="false" data-toggle="tab" href="#invoice_statuses"> <span class="visible-xs"><i class="ti-email"></i></span> <span class="hidden-xs">Invoice Statuses</span> </a>
                        </li>
                        <li class="tab">
                            <a aria-expanded="false" data-toggle="tab" href="#lab_sheet_types"> <span class="visible-xs"><i class="ti-user"></i></span> <span class="hidden-xs">Lab Sheet Types</span> </a>
                        </li>
                        <li class="tab">
                            <a aria-expanded="false" data-toggle="tab" href="#nominal_codes"> <span class="visible-xs"><i class="ti-email"></i></span> <span class="hidden-xs">Nominal Codes</span> </a>
                        </li>
                        <li class="tab">
                            <a aria-expanded="false" data-toggle="tab" href="#practices"> <span class="visible-xs"><i class="ti-email"></i></span> <span class="hidden-xs">Practices</span> </a>
                        </li>
                        <li class="tab">
                            <a aria-expanded="false" data-toggle="tab" href="#pricebands"> <span class="visible-xs"><i class="ti-email"></i></span> <span class="hidden-xs">Pricebands</span> </a>
                        </li>
                        <li class="tab">
                            <a aria-expanded="false" data-toggle="tab" href="#remake_reasons"> <span class="visible-xs"><i class="ti-email"></i></span> <span class="hidden-xs">Remake Reasons</span> </a>
                        </li>
                        <li class="tab">
                            <a aria-expanded="false" data-toggle="tab" href="#service_report_issues"> <span class="visible-xs"><i class="ti-email"></i></span> <span class="hidden-xs">Service Report Issues</span> </a>
                        </li>
                        <li class="tab">
                            <a aria-expanded="false" data-toggle="tab" href="#service_report_recipients"> <span class="visible-xs"><i class="ti-email"></i></span> <span class="hidden-xs">Service Report Recipients</span> </a>
                        </li>
                        <li class="tab">
                            <a aria-expanded="false" data-toggle="tab" href="#vat_rates"> <span class="visible-xs"><i class="ti-email"></i></span> <span class="hidden-xs">Vat Rates</span> </a>
                        </li>
                    </ul>
                    <div class="tab-content active">
                        <div id="areas" class="tab-pane">
                            @include('/admin.areas.table', $areas = App\Models\Area::get())
                        </div>
                        <div id="dentist_statuses" class="tab-pane">
                            @include('/admin.dentist_statuses.table', $dentistStatuses = App\Models\DentistStatus::get())
                        </div>
                        <div id="departments" class="tab-pane">
                            @include('admin.departments.table', $departments = App\Models\Department::get())
                        </div>
                        <div id="discounts" class="tab-pane">
                            @include('admin.discounts.table', $discounts = App\Models\Discount::get())
                        </div>
                        <div id="error_descriptions" class="tab-pane">
                            @include('admin.job_errors.table', $jobErrors = App\Models\JobError::get())
                        </div>
                        <div id="invoice_statuses" class="tab-pane">
                            @include('admin.invoice_statuses.table', $invoiceStatuses = App\Models\InvoiceStatus::get())
                        </div>
                        <div id="lab_sheet_types" class="tab-pane">
                            @include('admin.lab_sheets.table', $labSheets = App\Models\LabSheet::get())
                        </div>
                        <div id="nominal_codes" class="tab-pane">
                            @include('admin.nominal_codes.table', $nominalCodes = App\Models\NominalCode::get())
                        </div>
                        <div id="practices" class="tab-pane">
                            @include('admin.practices.table', $practices = App\Models\Practice::get())
                        </div>
                        <div id="pricebands" class="tab-pane">
                            @include('admin.pricebands.table', $pricebands = App\Models\Priceband::get())
                        </div>
                        <div id="remake_reasons" class="tab-pane">
                            @include('admin.remake_reasons.table', $remakeReasons = App\Models\RemakeReason::get())
                        </div>
                        <div id="service_report_issues" class="tab-pane">
                            @include('admin.service_report_issues.table', $serviceReportIssues = App\Models\ServiceReportIssue::get())
                        </div>
                        <div id="service_report_recipients" class="tab-pane">
                            @include('admin.service_report_recipients.table', $serviceReportRecipients = App\Models\ServiceReportRecipient::get())
                        </div>
                        <div id="vat_rates" class="tab-pane">
                            @include('admin.vat_rates.table', $vatRates = App\Models\VatRate::get())
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
