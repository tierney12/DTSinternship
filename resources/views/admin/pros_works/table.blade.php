<table class="table table-hover">
    <thead>
        <tr class="text-uppercase">
            <th>Cast Models Tech</th>
        <th>Cast Models Units</th>
        <th>Special Tray Tech</th>
        <th>Special Tray Units</th>
        <th>Duplicate Tech</th>
        <th>Duplicate Units</th>
        <th>Record Block Tech</th>
        <th>Record Block Units</th>
        <th>Replica Block Tech</th>
        <th>Replica Block Units</th>
        <th>Articulate Tech</th>
        <th>Articulate Units</th>
        <th>Design Tech</th>
        <th>Design Units</th>
        <th>Wax Up Tech</th>
        <th>Wax Up Units</th>
        <th>Trial Tech</th>
        <th>Trial Units</th>
        <th>Re Trail Tech</th>
        <th>Re Trail Units</th>
        <th>Reset Finish Tech</th>
        <th>Reset Finish Units</th>
        <th>Wax Finish Tech</th>
        <th>Wax Finish Units</th>
        <th>Flask Tech</th>
        <th>Flask Units</th>
        <th>Deflask Tech</th>
        <th>Deflask Units</th>
        <th>Trim Tech</th>
        <th>Trim Units</th>
        <th>Polish Tech</th>
        <th>Polish Units</th>
        <th>Repair Tech</th>
        <th>Repair Units</th>
        <th>Other Tech</th>
        <th>Other Units</th>
        <th>Created By</th>
        <th>Updated By</th>
        </tr>
    </thead>
    <tbody>
    @foreach($prosWorks as $prosWork)
        <tr class="clickable"
            data-url="{{ route('pros-works.show', $prosWork) }}">
            <td>{!! $prosWork->cast_models_tech !!}</td>
            <td>{!! $prosWork->cast_models_units !!}</td>
            <td>{!! $prosWork->special_tray_tech !!}</td>
            <td>{!! $prosWork->special_tray_units !!}</td>
            <td>{!! $prosWork->duplicate_tech !!}</td>
            <td>{!! $prosWork->duplicate_units !!}</td>
            <td>{!! $prosWork->record_block_tech !!}</td>
            <td>{!! $prosWork->record_block_units !!}</td>
            <td>{!! $prosWork->replica_block_tech !!}</td>
            <td>{!! $prosWork->replica_block_units !!}</td>
            <td>{!! $prosWork->articulate_tech !!}</td>
            <td>{!! $prosWork->articulate_units !!}</td>
            <td>{!! $prosWork->design_tech !!}</td>
            <td>{!! $prosWork->design_units !!}</td>
            <td>{!! $prosWork->wax_up_tech !!}</td>
            <td>{!! $prosWork->wax_up_units !!}</td>
            <td>{!! $prosWork->trial_tech !!}</td>
            <td>{!! $prosWork->trial_units !!}</td>
            <td>{!! $prosWork->re_trail_tech !!}</td>
            <td>{!! $prosWork->re_trail_units !!}</td>
            <td>{!! $prosWork->reset_finish_tech !!}</td>
            <td>{!! $prosWork->reset_finish_units !!}</td>
            <td>{!! $prosWork->wax_finish_tech !!}</td>
            <td>{!! $prosWork->wax_finish_units !!}</td>
            <td>{!! $prosWork->flask_tech !!}</td>
            <td>{!! $prosWork->flask_units !!}</td>
            <td>{!! $prosWork->deflask_tech !!}</td>
            <td>{!! $prosWork->deflask_units !!}</td>
            <td>{!! $prosWork->trim_tech !!}</td>
            <td>{!! $prosWork->trim_units !!}</td>
            <td>{!! $prosWork->polish_tech !!}</td>
            <td>{!! $prosWork->polish_units !!}</td>
            <td>{!! $prosWork->repair_tech !!}</td>
            <td>{!! $prosWork->repair_units !!}</td>
            <td>{!! $prosWork->other_tech !!}</td>
            <td>{!! $prosWork->other_units !!}</td>
            <td>{!! $prosWork->created_by !!}</td>
            <td>{!! $prosWork->updated_by !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>