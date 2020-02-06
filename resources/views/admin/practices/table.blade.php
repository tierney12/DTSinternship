<table class="table table-hover">
    <thead>
        <tr class="text-uppercase">
            <th>Name</th>
        <th>Practice Manager</th>
        {{--<th>Created By</th>--}}
        {{--<th>Updated By</th>--}}
        </tr>
    </thead>
    <tbody>
    @foreach($practices as $practice)
        <tr class="clickable"
            data-url="{{ route('practices.show', $practice) }}">
            <td>{!! $practice->name !!}</td>
            <td>{!! $practice->practice_manager !!}</td>
            {{--<td>{!! $practice->created_by !!}</td>--}}
            {{--<td>{!! $practice->updated_by !!}</td>--}}
        </tr>
    @endforeach
    </tbody>
</table>