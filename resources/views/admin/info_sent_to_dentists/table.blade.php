<table class="table table-hover">
    <thead>
        <tr class="text-uppercase">
            <th>Dentist</th>
        <th>Date</th>
        <th>Info Sent</th>
        {{--<th>Created By</th>--}}
        {{--<th>Updated By</th>--}}
        </tr>
    </thead>
    <tbody>
    @foreach($infoSentToDentists as $infoSentToDentist)
        <tr class="clickable"
            data-url="{{ route('info-sent-to-dentists.show', $infoSentToDentist) }}">
            <td>{!! $infoSentToDentist->dentist->name !!}</td>
            <td>{!! $infoSentToDentist->date !!}</td>
            <td>{!! $infoSentToDentist->info_sent !!}</td>
            {{--<td>{!! $infoSentToDentist->created_by !!}</td>--}}
            {{--<td>{!! $infoSentToDentist->updated_by !!}</td>--}}
        </tr>
    @endforeach
    </tbody>
</table>