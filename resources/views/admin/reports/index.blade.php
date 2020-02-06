@extends('layouts.admin.master')

@section('section-title')
    <h4 class="page-title">Reports</h4>
@endsection

@section('breadcrumbs')
    <ol class="breadcrumb" style="padding-right: 20px;">
        <li><a href="/">Home</a></li>
        <li class="active">Reports</li>
    </ol>
@endsection

@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-md-6 col-sm-6 p-20">
            <h3 class="box-title">Custom content</h3>
            <div class="list-group">
                <a href="javascript:void(0)" class="list-group-item active">
                    <h4 class="list-group-item-heading">List group item heading</h4>
                    <p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
                </a>
                <a href="javascript:void(0)" class="list-group-item __web-inspector-hide-shortcut__">
                    <h4 class="list-group-item-heading">List group item heading</h4>
                    <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. </p>
                </a>
                <a href="javascript:void(0)" class="list-group-item __web-inspector-hide-shortcut__">
                    <h4 class="list-group-item-heading">List group item heading</h4>
                    <p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
                </a>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection