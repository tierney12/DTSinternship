<table class="table table-hover">
    <thead>
        <tr class="text-uppercase">
            <th>Dentist</th>
        <th>Message</th>
        <th>Date Added</th>
        {{--<th>Created By</th>--}}
        {{--<th>Updated By</th>--}}
        </tr>
    </thead>
    <tbody>
    @foreach($popups as $popup)
        <tr class="clickable"
            data-url="{{ route('popups.show', $popup) }}">
            <td>{!! $popup->dentist->name !!}</td>
            <td>{!! $popup->message !!}</td>
            <td>{!! $popup->date_added !!}</td>
            {{--<td>{!! $popup->created_by !!}</td>--}}
            {{--<td>{!! $popup->updated_by !!}</td>--}}
        </tr>
    @endforeach
    </tbody>
</table>