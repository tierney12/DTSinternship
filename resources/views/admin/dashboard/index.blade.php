@extends('layouts.admin.master')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="white-box">
                @php
                    $duejobs = App\Models\Job::where('date_due_out', today())->get();
                @endphp
                <h3 class="box-title">Due Out Today <span class="label label-warning label-rounded">{{$duejobs->count()}}</span></h3>
                <div class="scrollable">
                    <div class="table-responsive">
                        <table id="demo-foo-invoices" class="table m-t-30 table-hover contact-list" data-page-size="6">
                            <thead>
                            <tr>
                                <th>Department</th>
                                <th>Job</th>
                                <th>Patient</th>
                                <th>Status</th>
                                <th>Dentist</th>
                            </tr>
                            </thead>
                            @foreach($duejobs as $duejob)
                                <tr class="clickable"
                                    data-url="{{ route('jobs.show', $duejob) }}">
                                <td>{!! $duejob->department->name !!}</td>
                                <td>{!! $duejob->id !!}</td>
                                <td>{!! $duejob->patient_name !!}</td>
                                @if($duejob->date_dispactched == null)
                                    <td>Live</td>
                                @else
                                    <td>Done</td>
                                @endif
                                <td>{!! $duejob->dentist->title . " " . $duejob->dentist->firstname . " " . $duejob->dentist->surname !!}</td>
                                </tr>
                            @endforeach
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
        </div>
        <div class="col-md-6">
            <div class="white-box">
                @php
                    $latejobs = App\Models\Job::where('date_due_out', '<', today())->where('date_dispatched', null)->get();
                @endphp
                <h3 class="box-title" style="color:#ff7676;">Late Jobs <span class="label label-danger label-rounded">{{$latejobs->count()}}</span></h3>
                <div class="scrollable">
                    <div class="table-responsive">
                        <table id="demo-foo-invoices" class="table m-t-30 table-hover contact-list" data-page-size="6">
                            <thead>
                            <tr>
                                <th>Job</th>
                                <th>Patient</th>
                                <th>Dentist</th>
                                <th>Status</th>
                                <th>Due</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($latejobs as $latejob)
                                <tr class="clickable"
                                    data-url="{{ route('jobs.show', $latejob) }}">
                                    <td>{!! $latejob->id !!}</td>
                                    <td>{!! $latejob->patient_name !!}</td>
                                    <td>{!! $latejob->dentist->title . " " . $latejob->dentist->firstname . " " . $latejob->dentist->surname !!}</td>
                                    @if($latejob->date_dispactched == null)
                                        <td>Live</td>
                                    @else
                                        <td>Done</td>
                                    @endif
                                    <td>{!! \Carbon\Carbon::parse($latejob->date_due_out)->format('d/m/Y') !!}</td>
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
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-xs-12">
            <div class="white-box">
                <h3 class="box-title">Due Today</h3>
                <div id="morris-bar-chart">

                </div>

                <ul class="list-inline text-center m-t-40">
                    <li>
                        <h5><i class="fa fa-circle m-r-5" style="color: #ff7676;"></i>Due Today</h5>
                    </li>
                    <li>
                        <h5><i class="fa fa-circle m-r-5" style="color: #03538b;"></i>Incomplete</h5>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <form action="/printImage" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="imgUpload1">File input</label>
            <input type="file" id="imgUpload1" name="imgUpload1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


@endsection

@section('scripts')
    @php
    @endphp
    <script>
        Morris.Bar({
            element: 'morris-bar-chart',
            data: [{
                y: 'Chrome',
                a: 100,
                b: 90,
            }, {
                y: 'Complex/Implant',
                a: 75,
                b: 65,
            }, {
                y: 'Composite',
                a: 50,
                b: 40,
            }, {
                y: 'Denture',
                a: 75,
                b: 65,
            }, {
                y: '1International',
                a: 50,
                b: 40,
            }, {
                y: '2International',
                a: 75,
                b: 65,
            }, {
                y: 'NHS C and B',
                a: 75,
                b: 65,
            }, {
                y: 'Ortho',
                a: 150,
                b: 90,
            }, {
                y: 'ULTRA',
                a: 100,
                b: 90,
            }, {
                y: 'Veneer',
                a: 100,
                b: 90,
            }],
            xkey: 'y',
            ykeys: ['a', 'b'],
            labels: ['A', 'B'],
            barColors:['#ff7676', '#03538b'],
            hideHover: 'auto',
            gridLineColor: '#eef0f2',
            resize: true,
            xLabelAngle: 0
        });
    </script>
@endsection