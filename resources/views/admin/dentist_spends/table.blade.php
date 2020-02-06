<table class="table table-hover">
    <thead>
        <tr class="text-uppercase">
            <th>Dentist</th>
        <th>Spend Date</th>
        <th>Units</th>
        {{--<th>Created By</th>--}}
        {{--<th>Updated By</th>--}}
        </tr>
    </thead>
    <tbody>
    @foreach($dentistSpends as $dentistSpend)
        <tr class="clickable"
            data-url="{{ route('dentist-spends.show', $dentistSpend) }}">
            <td>{!! $dentistSpend->dentist->name !!}</td>
            <td>{!! $dentistSpend->spend_date !!}</td>
            <td>{!! $dentistSpend->units !!}</td>
            {{--<td>{!! $dentistSpend->created_by !!}</td>--}}
            {{--<td>{!! $dentistSpend->updated_by !!}</td>--}}
        </tr>
    @endforeach
    </tbody>
</table>