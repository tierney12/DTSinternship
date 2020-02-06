<table class="table table-hover">
    <thead>
        <tr class="text-uppercase">
            <th>Models Tech</th>
        <th>Models Units</th>
        <th>Trim Die Tech</th>
        <th>Trim Die Units</th>
        <th>Articulate Tech</th>
        <th>Articulate Units</th>
        <th>Scan Tech</th>
        <th>Scan Units</th>
        <th>Gold Work Tech</th>
        <th>Gold Work Units</th>
        <th>Foil And Core Tech</th>
        <th>Foil And Core Units</th>
        <th>Opaque Tech</th>
        <th>Opaque Units</th>
        <th>Build Up Tech</th>
        <th>Build Up Units</th>
        <th>Stone/grind In Tech</th>
        <th>Stone/grind In Units</th>
        <th>Glaze Tech</th>
        <th>Glaze Units</th>
        <th>Fit Tech</th>
        <th>Fit Units</th>
        <th>Other Tech</th>
        <th>Other Units</th>
        <th>Created By</th>
        <th>Updated By</th>
        </tr>
    </thead>
    <tbody>
    @foreach($cb_works as $cb_work)
        <tr class="clickable"
            data-url="{{ route('crown-bridge-works.show', $cb_work) }}">
            <td>{!! $cb_work->models_tech !!}</td>
            <td>{!! $cb_work->models_units !!}</td>
            <td>{!! $cb_work->trim_die_tech !!}</td>
            <td>{!! $cb_work->trim_die_units !!}</td>
            <td>{!! $cb_work->articulate_tech !!}</td>
            <td>{!! $cb_work->articulate_units !!}</td>
            <td>{!! $cb_work->scan_tech !!}</td>
            <td>{!! $cb_work->scan_units !!}</td>
            <td>{!! $cb_work->gold_work_tech !!}</td>
            <td>{!! $cb_work->gold_work_units !!}</td>
            <td>{!! $cb_work->foil_and_core_tech !!}</td>
            <td>{!! $cb_work->foil_and_core_units !!}</td>
            <td>{!! $cb_work->opaque_tech !!}</td>
            <td>{!! $cb_work->opaque_units !!}</td>
            <td>{!! $cb_work->build_up_tech !!}</td>
            <td>{!! $cb_work->build_up_units !!}</td>
            <td>{!! $cb_work->stone/grind_in_tech !!}</td>
            <td>{!! $cb_work->stone/grind_in_units !!}</td>
            <td>{!! $cb_work->glaze_tech !!}</td>
            <td>{!! $cb_work->glaze_units !!}</td>
            <td>{!! $cb_work->fit_tech !!}</td>
            <td>{!! $cb_work->fit_units !!}</td>
            <td>{!! $cb_work->other_tech !!}</td>
            <td>{!! $cb_work->other_units !!}</td>
            <td>{!! $cb_work->created_by !!}</td>
            <td>{!! $cb_work->updated_by !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>