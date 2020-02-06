<table class="table table-hover">
    <thead>
        <tr class="text-uppercase">
            <th>Dentist</th>
            <th>Date In</th>
            <th>Due Date Out</th>
            <th>Department</th>
            <th>Units</th>

        </tr>
    </thead>
    <tbody>
    @foreach($jobs as $job)
        <tr class="clickable"
            data-url="{{ route('jobs.show', $job) }}">
            <td>{!! $job->dentist->title . " " . $job->dentist->firstname . " " . $job->dentist->surname !!}</td>
            <td>{!! \Carbon\Carbon::parse($job->date_in)->format('d/m/Y') !!}</td>
            <td>{!! \Carbon\Carbon::parse($job->date_due_out)->format('d/m/Y') !!}</td>
            <td>{!! $job->department->name !!}</td>
            @php($total_units = 0)
            @foreach($job->stocks as $stock)
                @php($total_units =  $total_units + ($stock->units))
            @endforeach
            <td>{!! $total_units !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>