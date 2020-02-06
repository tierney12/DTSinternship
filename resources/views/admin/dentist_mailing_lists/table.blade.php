<table class="table table-hover">
    <thead>
        <tr class="text-uppercase">
            <th>Dentist</th>
        <th>Mailing List</th>
        {{--<th>Created By</th>--}}
        {{--<th>Updated By</th>--}}
        </tr>
    </thead>
    <tbody>
    @foreach($dentistMailingLists as $dentistMailingList)
        <tr class="clickable"
            data-url="{{ route('dentist-mailing-lists.show', $dentistMailingList) }}">
            <td>{!! $dentistMailingList->dentist->name !!}</td>
            <td>{!! $dentistMailingList->mailingList->name !!}</td>
            {{--<td>{!! $dentistMailingList->created_by !!}</td>--}}
            {{--<td>{!! $dentistMailingList->updated_by !!}</td>--}}
        </tr>
    @endforeach
    </tbody>
</table>