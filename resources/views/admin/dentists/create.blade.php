@extends('layouts.admin.master', ['pageTitle' => 'Dentists'])

@section('breadcrumbs')
    <ol class="breadcrumb" style="padding-right: 20px;">
        <li><a href="/">Home</a></li>
        <li><a href="/">Dentists</a></li>
        <li class="active">Create</li>
    </ol>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            @include('admin.dentists.form')
        </div>
    </div>
@endsection





{{--@section('content')--}}
    {{--<div class="row">--}}
        {{--<div class="white-box">--}}
            {{--<div class="container">--}}
                {{--@include('admin.dentists.create_fields')--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--@endsection--}}

{{--@push('css')--}}
    {{--<link rel="stylesheet" href="{{ asset('plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">--}}
{{--@endpush--}}

{{--@push('js')--}}
    {{--<script src="/plugins/bower_components/footable/js/footable.all.min.js"></script>--}}
    {{--<script src="{{ asset('plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>--}}
    {{--<script>--}}
        {{--$(document).ready( function() {--}}
            {{--$('.datepicker').datepicker();--}}
        {{--});--}}

        {{--$(window).on('load', function() {--}}
            {{--if ($('#demo-foo-statements tbody tr').length > 6) {--}}
                {{--$('#demo-foo-statements').footable();--}}
            {{--}--}}
            {{--if ($('#demo-foo-invoices tbody tr').length > 6) {--}}
                {{--$('#demo-foo-invoices').footable();--}}
            {{--}--}}
            {{--if ($('#demo-foo-recent tbody tr').length > 6) {--}}
                {{--$('#demo-foo-recent').footable();--}}
            {{--}--}}
        {{--});--}}
    {{--</script>--}}
{{--@endpush--}}