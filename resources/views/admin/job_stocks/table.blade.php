<table class="table table-hover">
    <thead>
        <tr class="text-uppercase">
            <th>Created By</th>
        <th>Job</th>
        <th>Stock</th>
        <th>Units</th>
        <th>Updated By</th>
        </tr>
    </thead>
    <tbody>
    @foreach($jobStocks as $jobStock)
        <tr class="clickable"
            data-url="{{ route('job-stocks.show', $jobStock) }}">
            <td>{!! $jobStock->created_by !!}</td>
            <td>{!! $jobStock->job->name !!}</td>
            <td>{!! $jobStock->stock->name !!}</td>
            <td>{!! $jobStock->units !!}</td>
            <td>{!! $jobStock->updated_by !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>