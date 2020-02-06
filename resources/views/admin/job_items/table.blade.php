<table class="table table-hover">
    <thead>
        <tr class="text-uppercase">
            <th>Job</th>
        <th>Products</th>
        {{--<th>Created By</th>--}}
        {{--<th>Updated By</th>--}}
        </tr>
    </thead>
    <tbody>
    @foreach($jobItems as $jobItem)
        <tr class="clickable"
            data-url="{{ route('job-items.show', $jobItem) }}">
            <td>{!! $jobItem->job->name !!}</td>
            <td>{!! $jobItem->products->name !!}</td>
            {{--<td>{!! $jobItem->created_by !!}</td>--}}
            {{--<td>{!! $jobItem->updated_by !!}</td>--}}
        </tr>
    @endforeach
    </tbody>
</table>