@extends('layouts.admin.master')

@section('section-title')
    <h4 class="page-title">Jobs</h4>
@endsection

@section('breadcrumbs')
    <a href="/jobs/create" style="float: right;">
        <button class="btn btn-primary"><span>Book In Job</span></button>
    </a>
    <ol class="breadcrumb" style="padding-right: 20px;">
        <li><a href="/">Home</a></li>
        <li class="active">Jobs</li>
    </ol>
@endsection

@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-sm-4">
            <div>
                <div class="white-box">
                    <div class="row">
                        <div class="col-lg-12 col-sm-1r">
                            <ul class="col-in">
                                <li class="col-last">
                                    <h3 class="counter text-right m-t-15">45</h3>
                                </li>
                                <li class="col-middle">
                                    <h4>Not Started</h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="white-box">
                    <div class="row">
                        <div class="col-lg-12 col-sm-1r">
                            <ul class="col-in">
                                <li class="col-last">
                                    <h3 class="counter text-right m-t-15">96</h3>
                                </li>
                                <li class="col-middle">
                                    <h4>In Progress</h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="white-box">
                    <div class="row">
                        <div class="col-lg-12 col-sm-1r">
                            <ul class="col-in">
                                <li class="col-last">
                                    <h3 class="counter text-right m-t-15">11</h3>
                                </li>
                                <li class="col-middle">
                                    <h4>Late</h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="white-box">
                    <div class="row">
                        <div class="col-lg-12 col-sm-1r">
                            <ul class="col-in">
                                <li class="col-last">
                                    <h3 class="counter text-right m-t-15">64</h3>
                                </li>
                                <li class="col-middle">
                                    <h4>Dispatch</h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-8">
            <div class="white-box">
                @include('admin.jobs.table')
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="/plugins/bower_components/footable/js/footable.all.min.js"></script>
    <script>
        $(window).on('load', function() {
            if ($('#demo-foo-statements tbody tr').length > 6) {
                $('#demo-foo-statements').footable();
            }
            if ($('#demo-foo-invoices tbody tr').length > 6) {
                $('#demo-foo-invoices').footable();
            }
            if ($('#demo-foo-recent tbody tr').length > 6) {
                $('#demo-foo-recent').footable();
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#demo-foo-invoices tr').on('click', function() {
                window.location = "/job/999";
            });
        });
    </script>
@endsection