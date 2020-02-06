<table class="table table-hover">
    <thead>
        <tr class="text-uppercase">
            <th>Name</th>
        {{--<th>Created By</th>--}}
        {{--<th>Updated By</th>--}}
        </tr>
    </thead>
    <tbody>
    @foreach($labSheets as $labSheet)
        <tr class="clickable"
            data-url="{{ route('lab-sheets.show', $labSheet) }}">
            <td>{!! $labSheet->name !!}</td>
            {{--<td>{!! $labSheet->created_by !!}</td>--}}
            {{--<td>{!! $labSheet->updated_by !!}</td>--}}
        </tr>
    @endforeach
    </tbody>
</table>