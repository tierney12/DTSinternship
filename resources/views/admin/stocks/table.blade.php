<table class="table table-hover">
    <thead>
    <tr class="text-uppercase">
        <th>Priceband</th>
        <th>Price</th>
        <th>Stock Code</th>
        <th>Department</th>
        <th>Stock Description</th>
        <th>Idh Code</th>
        <th>Nhs Code</th>
        <th>Crown</th>
        <th>Bridge</th>
        <th>Inlay Onlay</th>
        <th>Post Core</th>
        <th>Ptm Non Precious</th>
        <th>Ptm Argelite 54B</th>
        <th>Ptm Argedent Euro</th>
        <th>Ptm Argedent 52</th>
        <th>Ptm Argedent 75</th>
        <th>Ptm Argedent 86</th>
        <th>Ptm Captek</th>
        <th>Fcc Non Precious</th>
        <th>Fcc Non Precious Yellow</th>
        <th>Fcc Argelite 54B</th>
        <th>Fcc Argenco Y</th>
        <th>Fcc Argenco 20</th>
        <th>Fcc Argenco 52</th>
        <th>Fcc Argenco 75</th>
        <th>Ac E Max</th>
        <th>Ac Venner</th>
        <th>Ac Full Zirconia</th>
        <th>Ac Zirconia</th>
        <th>Ac Composite</th>
        <th>Oth Temporary Crown</th>
        <th>Oth Diagnostic Wax Up</th>
    </tr>
    </thead>
    <tbody>
    @foreach($stockPricebands as $stockPriceband)
        <tr class="clickable"
            data-url="{{ route('stock-pricebands.show', $stockPriceband) }}">
            <td>{!! $stockPriceband->priceband->name !!}</td>
            <td>{!! $stockPriceband->price !!}</td>
            <td>{!! $stockPriceband->stock_code !!}</td>
            <td>{!! $stockPriceband->department !!}</td>
            <td>{!! $stockPriceband->stock_description !!}</td>
            <td>{!! $stockPriceband->idh_code !!}</td>
            <td>{!! $stockPriceband->nhs_code !!}</td>
            <td>{!! $stockPriceband->crown !!}</td>
            <td>{!! $stockPriceband->bridge !!}</td>
            <td>{!! $stockPriceband->inlay_onlay !!}</td>
            <td>{!! $stockPriceband->post_core !!}</td>
            <td>{!! $stockPriceband->ptm_non_precious !!}</td>
            <td>{!! $stockPriceband->ptm_argelite_54B !!}</td>
            <td>{!! $stockPriceband->ptm_argedent_EURO !!}</td>
            <td>{!! $stockPriceband->ptm_argedent_52 !!}</td>
            <td>{!! $stockPriceband->ptm_argedent_75 !!}</td>
            <td>{!! $stockPriceband->ptm_argedent_86 !!}</td>
            <td>{!! $stockPriceband->ptm_captek !!}</td>
            <td>{!! $stockPriceband->fcc_non_precious !!}</td>
            <td>{!! $stockPriceband->fcc_non_precious_yellow !!}</td>
            <td>{!! $stockPriceband->fcc_argelite_54B !!}</td>
            <td>{!! $stockPriceband->fcc_argenco_Y !!}</td>
            <td>{!! $stockPriceband->fcc_argenco_20 !!}</td>
            <td>{!! $stockPriceband->fcc_argenco_52 !!}</td>
            <td>{!! $stockPriceband->fcc_argenco_75 !!}</td>
            <td>{!! $stockPriceband->ac_e_max !!}</td>
            <td>{!! $stockPriceband->ac_venner !!}</td>
            <td>{!! $stockPriceband->ac_full_zirconia !!}</td>
            <td>{!! $stockPriceband->ac_zirconia !!}</td>
            <td>{!! $stockPriceband->ac_composite !!}</td>
            <td>{!! $stockPriceband->oth_temporary_crown !!}</td>
            <td>{!! $stockPriceband->oth_diagnostic_wax_up !!}</td>

        </tr>
    @endforeach
    </tbody>
</table>