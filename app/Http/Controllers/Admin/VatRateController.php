<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\VatRateRequest;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Repositories\VatRateRepository;

class VatRateController extends AppBaseController
{
    /** @var  VatRateRepository */

    private $vatRateRepository;

    public function __construct(VatRateRepository $vatRateRepo)
    {
        $this->vatRateRepository = $vatRateRepo;
    }

    /**
     * Display a listing of the VatRate.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->vatRateRepository->pushCriteria(new RequestCriteria($request));
        $vatRates = $this->vatRateRepository->all();

        return view('admin.vat_rates.index', compact('vatRates'));
    }

    /**
     * Show the form for creating a new VatRate.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        
        if ($request->ajax()) {
            return view('admin.vat_rates.form');
        }

        return view('admin.vat_rates.create');
    }

    /**
     * Store a newly created VatRate in storage.
     *
     * @param CreateVatRateRequest $request
     *
     * @return Response
     */
    public function store(VatRateRequest $request)
    {
        $input = $request->all();

        $vatRate = $this->vatRateRepository->create($input);

        if ($request->ajax()) {
            $data = [
                'id'   => $vatRate->id,
                'name' => $vatRate->name,
            ];

            return response()->json($data);
        }

        Flash::success('Vat Rate saved successfully.');

        return redirect(route('vat-rates.index'));
    }

    /**
     * Display the specified VatRate.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $vatRate = $this->vatRateRepository->findWithoutFail($id);

        if (empty($vatRate)) {
            Flash::error('Vat Rate not found');

            return redirect(route('vat-rates.index'));
        }

        return view('admin.vat_rates.show', compact('vatRate'));
    }

    /**
     * Show the form for editing the specified VatRate.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $vatRate = $this->vatRateRepository->findWithoutFail($id);
        
        if (empty($vatRate)) {
            Flash::error('Vat Rate not found');

            return redirect(route('vat-rates.index'));
        }

        return view('admin.vat_rates.edit', compact(
            'vatRate'));
    }

    /**
     * Update the specified VatRate in storage.
     *
     * @param  int              $id
     * @param UpdateVatRateRequest $request
     *
     * @return Response
     */
    public function update($id, VatRateRequest $request)
    {
        $vatRate = $this->vatRateRepository->findWithoutFail($id);

        if (empty($vatRate)) {
            Flash::error('Vat Rate not found');

            return redirect(route('vat-rates.index'));
        }

        $vatRate = $this->vatRateRepository->update($request->all(), $id);

        Flash::success('Vat Rate updated successfully.');

        return redirect(route('vat-rates.index'));
    }

    /**
     * Remove the specified VatRate from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $vatRate = $this->vatRateRepository->findWithoutFail($id);

        if (empty($vatRate)) {
            Flash::error('Vat Rate not found');

            return redirect(route('vat-rates.index'));
        }

        $this->vatRateRepository->delete($id);

        Flash::success('Vat Rate deleted successfully.');

        return redirect(route('vat-rates.index'));
    }
}
