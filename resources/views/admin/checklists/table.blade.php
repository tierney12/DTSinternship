<table class="table table-hover">
    <thead>
        <tr class="text-uppercase">
            <th>Name</th>
        <th>Item1</th>
        <th>Item2</th>
        <th>Item3</th>
        <th>Item4</th>
        <th>Item5</th>
        <th>Item6</th>
        <th>Item7</th>
        <th>Item8</th>
        <th>Item9</th>
        <th>Item10</th>
        <th>Item11</th>
        <th>Item12</th>
        <th>Item13</th>
        <th>Item14</th>
        <th>Item15</th>
        <th>Item16</th>
        <th>Item17</th>
        <th>Item18</th>
        <th>Item19</th>
        <th>Item20</th>
        <th>Created By</th>
        <th>Updated By</th>
        </tr>
    </thead>
    <tbody>
    @foreach($checklists as $checklist)
        <tr class="clickable"
            data-url="{{ route('checklists.show', $checklist) }}">
            <td>{!! $checklist->name !!}</td>
            <td>{!! $checklist->item1 !!}</td>
            <td>{!! $checklist->item2 !!}</td>
            <td>{!! $checklist->item3 !!}</td>
            <td>{!! $checklist->item4 !!}</td>
            <td>{!! $checklist->item5 !!}</td>
            <td>{!! $checklist->item6 !!}</td>
            <td>{!! $checklist->item7 !!}</td>
            <td>{!! $checklist->item8 !!}</td>
            <td>{!! $checklist->item9 !!}</td>
            <td>{!! $checklist->item10 !!}</td>
            <td>{!! $checklist->item11 !!}</td>
            <td>{!! $checklist->item12 !!}</td>
            <td>{!! $checklist->item13 !!}</td>
            <td>{!! $checklist->item14 !!}</td>
            <td>{!! $checklist->item15 !!}</td>
            <td>{!! $checklist->item16 !!}</td>
            <td>{!! $checklist->item17 !!}</td>
            <td>{!! $checklist->item18 !!}</td>
            <td>{!! $checklist->item19 !!}</td>
            <td>{!! $checklist->item20 !!}</td>
            <td>{!! $checklist->created_by !!}</td>
            <td>{!! $checklist->updated_by !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>