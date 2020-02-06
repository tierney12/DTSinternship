<table class="table table-hover">
    <thead>
        <tr class="text-uppercase">
            <th>Name</th>
        {{--<th>Created By</th>--}}
        {{--<th>Updated By</th>--}}
        </tr>
    </thead>
    <tbody>
    @foreach($jobUpdateItems as $jobUpdateItem)
        <tr class="clickable"
            data-url="{{ route('job-update-items.show', $jobUpdateItem) }}">
            <td>{!! $jobUpdateItem->name !!}</td>
            {{--<td>{!! $jobUpdateItem->created_by !!}</td>--}}
            {{--<td>{!! $jobUpdateItem->updated_by !!}</td>--}}
        </tr>
    @endforeach
    </tbody>
</table>