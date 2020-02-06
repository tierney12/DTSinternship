@extends('layouts.admin.master')

@section('section-title')
    <h4 class="page-title">Production</h4>
@endsection

@section('breadcrumbs')
    <ol class="breadcrumb" style="padding-right: 20px;">
        <li><a href="/">Home</a></li>
        <li class="active">Production</li>
    </ol>
@endsection

@section('content')
    <style>
        .fc-unthemed .fc-today {
            background-color: #3b5998!important;
        }
        .fc-event {
            margin: 1px 35px 0!important;
            background-color: #3b5998!important;
        }
    </style>
    <div class="col-lg-4 xs-hidden sm-hidden">
        <div class="white-box">
            <div class="table-responsive">
                <table id="demo-foo-invoices" class="table m-t-30 table-hover contact-list" data-page-size="6">
                    <thead>
                    <tr>
                        <th>Lab</th>
                        <th>Overdue</th>
                        <th>Due Today</th>
                        <th>In Progress</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php
                        $departments = App\Models\Department::get();
                    @endphp

                    @foreach($departments as $department)
                        @php

                        @endphp
                        <tr>
                            <td>{{$department->name}}</td>
                            <td>{{$department->jobs->where('date_due_out', '<', today())->where('date_dispatched', null)->count()}}</td>
                            <td>{{$department->jobs->where('date_due_out', today())->count()}}</td>
                            <td>{{$department->jobs->where('date_dispatched', null)->count()}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="1">
                            <div class="text-right">
                                <ul class="pagination"> </ul>
                            </div>
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-8 col-sm-12">
        <div class="fc fc-unthemed fc-ltr">
            <div class="fc-toolbar fc-header-toolbar">
                <div class="fc-left">
                    <div class="fc-button-group">
                        <button type="button" class="fc-prev-button fc-button fc-state-default fc-corner-left">
						<span class="fc-icon fc-icon-left-single-arrow">
						</span>
                        </button>
                        <button type="button" class="fc-next-button fc-button fc-state-default fc-corner-right">
						<span class="fc-icon fc-icon-right-single-arrow">
						</span>
                        </button>
                    </div>
                    <button type="button" class="fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right fc-state-disabled" disabled="">today</button>
                </div>
                <div class="fc-right">
                    <div class="fc-button-group">
                        <button type="button" class="fc-month-button fc-button fc-state-default fc-corner-left fc-state-active">month</button>
                        <button type="button" class="fc-agendaWeek-button fc-button fc-state-default">week</button>
                        <button type="button" class="fc-agendaDay-button fc-button fc-state-default fc-corner-right">day</button>
                    </div>
                </div>
                <div class="fc-center">
                    <h2>August 2017</h2>
                </div>
                <div class="fc-clear">
                </div>
            </div>
            <div class="fc-view-container" style="">
                <div class="fc-view fc-month-view fc-basic-view" style="">
                    <table>
                        <thead class="fc-head">
                        <tr>
                            <td class="fc-head-container fc-widget-header">
                                <div class="fc-row fc-widget-header">
                                    <table>
                                        <thead>
                                        <tr>
                                            <th class="fc-day-header fc-widget-header fc-sun">
                                                <span>Sun</span>
                                            </th>
                                            <th class="fc-day-header fc-widget-header fc-mon">
                                                <span>Mon</span>
                                            </th>
                                            <th class="fc-day-header fc-widget-header fc-tue">
                                                <span>Tue</span>
                                            </th>
                                            <th class="fc-day-header fc-widget-header fc-wed">
                                                <span>Wed</span>
                                            </th>
                                            <th class="fc-day-header fc-widget-header fc-thu">
                                                <span>Thu</span>
                                            </th>
                                            <th class="fc-day-header fc-widget-header fc-fri">
                                                <span>Fri</span>
                                            </th>
                                            <th class="fc-day-header fc-widget-header fc-sat">
                                                <span>Sat</span>
                                            </th>
                                        </tr>
                                        </thead>
                                    </table>
                                </div>
                            </td>
                        </tr>
                        </thead>
                        <tbody class="fc-body">
                        <tr>
                            <td class="fc-widget-content">
                                <div class="fc-scroller fc-day-grid-container" style="overflow: hidden; height: 625px;">
                                    <div class="fc-day-grid fc-unselectable">
                                        <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 104px;">
                                            <div class="fc-bg">
                                                <table>
                                                    <tbody>
                                                    <tr>
                                                        <td class="fc-day fc-widget-content fc-sun fc-other-month fc-past" data-date="2017-07-30">
                                                        </td>
                                                        <td class="fc-day fc-widget-content fc-mon fc-other-month fc-past" data-date="2017-07-31">
                                                        </td>
                                                        <td class="fc-day fc-widget-content fc-tue fc-past" data-date="2017-08-01">
                                                        </td>
                                                        <td class="fc-day fc-widget-content fc-wed fc-past" data-date="2017-08-02">
                                                        </td>
                                                        <td class="fc-day fc-widget-content fc-thu fc-past" data-date="2017-08-03">
                                                        </td>
                                                        <td class="fc-day fc-widget-content fc-fri fc-past" data-date="2017-08-04">
                                                        </td>
                                                        <td class="fc-day fc-widget-content fc-sat fc-past" data-date="2017-08-05">
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="fc-content-skeleton">
                                                <table>
                                                    <thead>
                                                    <tr>
                                                        <td class="fc-day-top fc-sun fc-other-month fc-past" data-date="2017-07-30">
                                                            <span class="fc-day-number">30</span>
                                                        </td>
                                                        <td class="fc-day-top fc-mon fc-other-month fc-past" data-date="2017-07-31">
                                                            <span class="fc-day-number">31</span>
                                                        </td>
                                                        <td class="fc-day-top fc-tue fc-past" data-date="2017-08-01">
                                                            <span class="fc-day-number">1</span>
                                                        </td>
                                                        <td class="fc-day-top fc-wed fc-past" data-date="2017-08-02">
                                                            <span class="fc-day-number">2</span>
                                                        </td>
                                                        <td class="fc-day-top fc-thu fc-past" data-date="2017-08-03">
                                                            <span class="fc-day-number">3</span>
                                                        </td>
                                                        <td class="fc-day-top fc-fri fc-past" data-date="2017-08-04">
                                                            <span class="fc-day-number">4</span>
                                                        </td>
                                                        <td class="fc-day-top fc-sat fc-past" data-date="2017-08-05">
                                                            <span class="fc-day-number">5</span>
                                                        </td>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>
                                                        </td>
                                                        <td>
                                                        </td>
                                                        <td>
                                                        </td>
                                                        <td>
                                                        </td>
                                                        <td>
                                                        </td>
                                                        <td>
                                                        </td>
                                                        <td>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 104px;">
                                            <div class="fc-bg">
                                                <table>
                                                    <tbody>
                                                    <tr>
                                                        <td class="fc-day fc-widget-content fc-sun fc-past" data-date="2017-08-06">
                                                        </td>
                                                        <td class="fc-day fc-widget-content fc-mon fc-past" data-date="2017-08-07">
                                                        </td>
                                                        <td class="fc-day fc-widget-content fc-tue fc-past" data-date="2017-08-08">
                                                        </td>
                                                        <td class="fc-day fc-widget-content fc-wed fc-past" data-date="2017-08-09">
                                                        </td>
                                                        <td class="fc-day fc-widget-content fc-thu fc-past" data-date="2017-08-10">
                                                        </td>
                                                        <td class="fc-day fc-widget-content fc-fri fc-past" data-date="2017-08-11">
                                                        </td>
                                                        <td class="fc-day fc-widget-content fc-sat fc-past" data-date="2017-08-12">
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="fc-content-skeleton">
                                                <table>
                                                    <thead>
                                                    <tr>
                                                        <td class="fc-day-top fc-sun fc-past" data-date="2017-08-06">
                                                            <span class="fc-day-number">6</span>
                                                        </td>
                                                        <td class="fc-day-top fc-mon fc-past" data-date="2017-08-07">
                                                            <span class="fc-day-number">7</span>
                                                        </td>
                                                        <td class="fc-day-top fc-tue fc-past" data-date="2017-08-08">
                                                            <span class="fc-day-number">8</span>
                                                        </td>
                                                        <td class="fc-day-top fc-wed fc-past" data-date="2017-08-09">
                                                            <span class="fc-day-number">9</span>
                                                        </td>
                                                        <td class="fc-day-top fc-thu fc-past" data-date="2017-08-10">
                                                            <span class="fc-day-number">10</span>
                                                        </td>
                                                        <td class="fc-day-top fc-fri fc-past" data-date="2017-08-11">
                                                            <span class="fc-day-number">11</span>
                                                        </td>
                                                        <td class="fc-day-top fc-sat fc-past" data-date="2017-08-12">
                                                            <span class="fc-day-number">12</span>
                                                        </td>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>
                                                        </td>
                                                        <td>
                                                        </td>
                                                        <td class="fc-event-container">
                                                            <a href="/production/job" class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-purple fc-draggable" style="background-color: #ff7676!important;">
                                                                <div class="fc-content">
                                                                    <span class="fc-time" style="color: #fff;">4</span>
                                                                </div>
                                                            </a>
                                                        </td>
                                                        <td>
                                                        </td>
                                                        <td>
                                                        </td>
                                                        <td class="fc-event-container">
                                                            <a href="/production/job" class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-purple fc-draggable" style="background-color: #ff7676!important;">
                                                                <div class="fc-content">
                                                                    <span class="fc-time" style="color: #fff;">7</span>
                                                                </div>
                                                            </a>
                                                        </td>
                                                        <td>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 104px;">
                                            <div class="fc-bg">
                                                <table>
                                                    <tbody>
                                                    <tr>
                                                        <td class="fc-day fc-widget-content fc-sun fc-past" data-date="2017-08-13">
                                                        </td>
                                                        <td class="fc-day fc-widget-content fc-mon fc-past" data-date="2017-08-14">
                                                        </td>
                                                        <td class="fc-day fc-widget-content fc-tue fc-past" data-date="2017-08-15">
                                                        </td>
                                                        <td class="fc-day fc-widget-content fc-wed fc-today fc-state-highlight" data-date="2017-08-16">
                                                        </td>
                                                        <td class="fc-day fc-widget-content fc-thu fc-past" data-date="2017-08-17">
                                                        </td>
                                                        <td class="fc-day fc-widget-content fc-fri fc-past" data-date="2017-08-18">
                                                        </td>
                                                        <td class="fc-day fc-widget-content fc-sat fc-past" data-date="2017-08-19">
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="fc-content-skeleton">
                                                <table>
                                                    <thead>
                                                    <tr>
                                                        <td class="fc-day-top fc-sun fc-past" data-date="2017-08-13">
                                                            <span class="fc-day-number">13</span>
                                                        </td>
                                                        <td class="fc-day-top fc-mon fc-past" data-date="2017-08-14">
                                                            <span class="fc-day-number">14</span>
                                                        </td>
                                                        <td class="fc-day-top fc-tue fc-past" data-date="2017-08-15">
                                                            <span class="fc-day-number">15</span>
                                                        </td>
                                                        <td class="fc-day-top fc-wed fc-today fc-state-highlight" data-date="2017-08-30" style="background-color: #3b5998;">
                                                            <span class="fc-day-number" style="color: white!important;">16</span>
                                                        </td>
                                                        <td class="fc-day-top fc-thu fc-past" data-date="2017-08-17">
                                                            <span class="fc-day-number">17</span>
                                                        </td>
                                                        <td class="fc-day-top fc-fri fc-past" data-date="2017-08-18">
                                                            <span class="fc-day-number">18</span>
                                                        </td>
                                                        <td class="fc-day-top fc-sat fc-past" data-date="2017-08-19">
                                                            <span class="fc-day-number">19</span>
                                                        </td>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>
                                                        </td>
                                                        <td class="fc-event-container">
                                                            <a href="/production/job" class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-purple fc-draggable" style="background-color: #ff7676!important;">
                                                                <div class="fc-content">
                                                                    <span class="fc-time" style="color: #fff;">12</span>
                                                                </div>
                                                            </a>
                                                        </td>
                                                        <td>
                                                        </td>
                                                        <td class="fc-event-container">
                                                            <a href="/production/job" class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-purple fc-draggable" style="background-color: #fff!important">
                                                                <div class="fc-content">
                                                                    <span class="fc-time" style="color: #3b5998;">103</span>
                                                                </div>
                                                            </a>
                                                        </td>
                                                        <td class="fc-event-container">
                                                            <a href="/production/job" class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-warning fc-draggable">
                                                                <div class="fc-content">
                                                                    <span class="fc-time">86</span>
                                                                </div>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 104px;">
                                            <div class="fc-bg">
                                                <table>
                                                    <tbody>
                                                    <tr>
                                                        <td class="fc-day fc-widget-content fc-sun fc-past" data-date="2017-08-20">
                                                        </td>
                                                        <td class="fc-day fc-widget-content fc-mon fc-past" data-date="2017-08-21">
                                                        </td>
                                                        <td class="fc-day fc-widget-content fc-tue fc-past" data-date="2017-08-22">
                                                        </td>
                                                        <td class="fc-day fc-widget-content fc-wed fc-past" data-date="2017-08-23">
                                                        </td>
                                                        <td class="fc-day fc-widget-content fc-thu fc-past" data-date="2017-08-24">
                                                        </td>
                                                        <td class="fc-day fc-widget-content fc-fri fc-past" data-date="2017-08-25">
                                                        </td>
                                                        <td class="fc-day fc-widget-content fc-sat fc-past" data-date="2017-08-26">
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="fc-content-skeleton">
                                                <table>
                                                    <thead>
                                                    <tr>
                                                        <td class="fc-day-top fc-sun fc-past" data-date="2017-08-20">
                                                            <span class="fc-day-number">20</span>
                                                        </td>
                                                        <td class="fc-day-top fc-mon fc-past" data-date="2017-08-21">
                                                            <span class="fc-day-number">21</span>
                                                        </td>
                                                        <td class="fc-day-top fc-tue fc-past" data-date="2017-08-22">
                                                            <span class="fc-day-number">22</span>
                                                        </td>
                                                        <td class="fc-day-top fc-wed fc-past" data-date="2017-08-23">
                                                            <span class="fc-day-number">23</span>
                                                        </td>
                                                        <td class="fc-day-top fc-thu fc-past" data-date="2017-08-24">
                                                            <span class="fc-day-number">24</span>
                                                        </td>
                                                        <td class="fc-day-top fc-fri fc-past" data-date="2017-08-25">
                                                            <span class="fc-day-number">25</span>
                                                        </td>
                                                        <td class="fc-day-top fc-sat fc-past" data-date="2017-08-26">
                                                            <span class="fc-day-number">26</span>
                                                        </td>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>
                                                        </td>
                                                        <td>
                                                        </td>
                                                        <td class="fc-event-container">
                                                            <a href="/production/job" class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-info fc-draggable">
                                                                <div class="fc-content">
                                                                    <span class="fc-time">59</span>
                                                                </div>
                                                            </a>
                                                        </td>
                                                        <td class="fc-event-container">
                                                            <a href="/production/job" class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-info fc-draggable">
                                                                <div class="fc-content">
                                                                    <span class="fc-time">45</span>
                                                                </div>
                                                            </a>
                                                        </td>
                                                        <td class="fc-event-container">
                                                            <a href="/production/job" class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-info fc-draggable">
                                                                <div class="fc-content">
                                                                    <span class="fc-time">23</span>
                                                                </div>
                                                            </a>
                                                        </td>
                                                        <td class="fc-event-container">
                                                            <a href="/production/job" class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-info fc-draggable">
                                                                <div class="fc-content">
                                                                    <span class="fc-time">36</span>
                                                                </div>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 104px;">
                                            <div class="fc-bg">
                                                <table>
                                                    <tbody>
                                                    <tr>
                                                        <td class="fc-day fc-widget-content fc-sun fc-past" data-date="2017-08-27">
                                                        </td>
                                                        <td class="fc-day fc-widget-content fc-mon fc-past" data-date="2017-08-28">
                                                        </td>
                                                        <td class="fc-day fc-widget-content fc-tue fc-past" data-date="2017-08-29">
                                                        </td>
                                                        <td class="fc-day fc-widget-content fc-wed fc-past" data-date="2017-08-30">
                                                        </td>
                                                        <td class="fc-day fc-widget-content fc-thu fc-future" data-date="2017-08-31">
                                                        </td>
                                                        <td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2017-09-01">
                                                        </td>
                                                        <td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2017-09-02">
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="fc-content-skeleton">
                                                <table>
                                                    <thead>
                                                    <tr>
                                                        <td class="fc-day-top fc-sun fc-past" data-date="2017-08-27">
                                                            <span class="fc-day-number">27</span>
                                                        </td>
                                                        <td class="fc-day-top fc-mon fc-past" data-date="2017-08-28">
                                                            <span class="fc-day-number">28</span>
                                                        </td>
                                                        <td class="fc-day-top fc-tue fc-past" data-date="2017-08-29">
                                                            <span class="fc-day-number">29</span>
                                                        </td>
                                                        <td class="fc-day-top fc-wed fc-past">
                                                            <span class="fc-day-number">30</span>
                                                        </td>
                                                        <td class="fc-day-top fc-thu fc-future" data-date="2017-08-31">
                                                            <span class="fc-day-number">31</span>
                                                        </td>
                                                        <td class="fc-day-top fc-fri fc-other-month fc-future" data-date="2017-09-01">
                                                            <span class="fc-day-number">1</span>
                                                        </td>
                                                        <td class="fc-day-top fc-sat fc-other-month fc-future" data-date="2017-09-02">
                                                            <span class="fc-day-number">2</span>
                                                        </td>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td class="fc-event-container">
                                                        </td>
                                                        <td>
                                                        </td>
                                                        <td class="fc-event-container">
                                                            <a href="/production/job" class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-danger fc-draggable">
                                                                <div class="fc-content">
                                                                    <span class="fc-time">21</span>
                                                                </div>
                                                            </a>
                                                        </td>
                                                        <td class="fc-event-container">
                                                            <a href="/production/job" class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-danger fc-draggable">
                                                                <div class="fc-content">
                                                                    <span class="fc-time">14</span>
                                                                </div>
                                                            </a>
                                                        </td>
                                                        <td class="fc-event-container">
                                                            <a href="/production/job" class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-danger fc-draggable">
                                                                <div class="fc-content">
                                                                    <span class="fc-time">7</span>
                                                                </div>
                                                            </a>
                                                        </td>
                                                        <td>
                                                        </td>
                                                        <td>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 105px;">
                                            <div class="fc-bg">
                                                <table>
                                                    <tbody>
                                                    <tr>
                                                        <td class="fc-day fc-widget-content fc-sun fc-other-month fc-future" data-date="2017-09-03">
                                                        </td>
                                                        <td class="fc-day fc-widget-content fc-mon fc-other-month fc-future" data-date="2017-09-04">
                                                        </td>
                                                        <td class="fc-day fc-widget-content fc-tue fc-other-month fc-future" data-date="2017-09-05">
                                                        </td>
                                                        <td class="fc-day fc-widget-content fc-wed fc-other-month fc-future" data-date="2017-09-06">
                                                        </td>
                                                        <td class="fc-day fc-widget-content fc-thu fc-other-month fc-future" data-date="2017-09-07">
                                                        </td>
                                                        <td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2017-09-08">
                                                        </td>
                                                        <td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2017-09-09">
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="fc-content-skeleton">
                                                <table>
                                                    <thead>
                                                    <tr>
                                                        <td class="fc-day-top fc-sun fc-other-month fc-future" data-date="2017-09-03">
                                                            <span class="fc-day-number">3</span>
                                                        </td>
                                                        <td class="fc-day-top fc-mon fc-other-month fc-future" data-date="2017-09-04">
                                                            <span class="fc-day-number">4</span>
                                                        </td>
                                                        <td class="fc-day-top fc-tue fc-other-month fc-future" data-date="2017-09-05">
                                                            <span class="fc-day-number">5</span>
                                                        </td>
                                                        <td class="fc-day-top fc-wed fc-other-month fc-future" data-date="2017-09-06">
                                                            <span class="fc-day-number">6</span>
                                                        </td>
                                                        <td class="fc-day-top fc-thu fc-other-month fc-future" data-date="2017-09-07">
                                                            <span class="fc-day-number">7</span>
                                                        </td>
                                                        <td class="fc-day-top fc-fri fc-other-month fc-future" data-date="2017-09-08">
                                                            <span class="fc-day-number">8</span>
                                                        </td>
                                                        <td class="fc-day-top fc-sat fc-other-month fc-future" data-date="2017-09-09">
                                                            <span class="fc-day-number">9</span>
                                                        </td>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td class="fc-event-container">
                                                        </td>
                                                        <td class="fc-event-container">
                                                            <a href="/production/job" class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-info fc-draggable">
                                                                <div class="fc-content">
                                                                    <span class="fc-time">6</span>
                                                                </div>
                                                            </a>
                                                        </td>
                                                        </td>
                                                        <td class="fc-event-container">
                                                            <a href="/production/job" class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-info fc-draggable">
                                                                <div class="fc-content">
                                                                    <span class="fc-time">6</span>
                                                                </div>
                                                            </a>
                                                        </td>
                                                        <td>
                                                        </td>
                                                        <td>
                                                        </td>
                                                        <td class="fc-event-container">
                                                            <a href="/production/job" class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-info fc-draggable">
                                                                <div class="fc-content">
                                                                    <span class="fc-time">4</span>
                                                                </div>
                                                            </a>
                                                        </td>
                                                        <td class="fc-event-container">
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection

@section('scripts')

@endsection