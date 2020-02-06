<table class="table table-hover">
    <thead>
        <tr class="text-uppercase">
        <th>ID</th>
        <th>Name</th>
        <th>Parctice</th>
        <th>Customer Since</th>
        <th>Area</th>

        </tr>
    </thead>
    <tbody>
    @foreach($dentists as $dentist)
        <tr class="clickable"
            data-url="{{ route('dentists.show', $dentist) }}">
            <td>{!! $dentist->account_number  !!}</td>
            <td>{!! $dentist->title . " " . $dentist->firstname . " " . $dentist->surname !!}</td>
            <td>{!! $dentist->practice->name !!}</td>
            <td>{!!  \Carbon\Carbon::parse($dentist->customer_since)->format('d/m/Y') !!}</td>
            <td>{!! $dentist->area->Area !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>