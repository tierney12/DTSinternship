<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\InvoiceDetailRequest;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Repositories\InvoiceDetailRepository;
use App\Repositories\ProductRepository;
use App\Repositories\InvoiceRepository;
use App\Repositories\VatRateRepository;

class InvoiceDetailController extends AppBaseController
{
    /** @var  InvoiceDetailRepository */

    private $invoiceDetailRepository;
    private $productRepository;
    private $invoiceRepository;
    private $vatRateRepository;

    public function __construct(InvoiceDetailRepository $invoiceDetailRepo, ProductRepository $productRepo, InvoiceRepository $invoiceRepo, VatRateRepository $vatRateRepo)
    {
        $this->invoiceDetailRepository = $invoiceDetailRepo;
        $this->productRepository = $productRepo;
        $this->invoiceRepository = $invoiceRepo;
        $this->vatRateRepository = $vatRateRepo;
    }

    /**
     * Display a listing of the InvoiceDetail.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->invoiceDetailRepository->pushCriteria(new RequestCriteria($request));
        $invoiceDetails = $this->invoiceDetailRepository->all();

        return view('admin.invoice_details.index', compact('invoiceDetails'));
    }

    /**
     * Show the form for creating a new InvoiceDetail.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        $products = $this->productRepository->all()->pluck('name', 'id');
        $invoices = $this->invoiceRepository->all()->pluck('name', 'id');
        $vatRates = $this->vatRateRepository->all()->pluck('name', 'id');

        if ($request->ajax()) {
            return view('admin.invoice_details.form');
        }

        return view('admin.invoice_details.create', compact(
            'products',
            'invoices',
            'vatRates'));
    }

    /**
     * Store a newly created InvoiceDetail in storage.
     *
     * @param CreateInvoiceDetailRequest $request
     *
     * @return Response
     */
    public function store(InvoiceDetailRequest $request)
    {
        $input = $request->all();

        $invoiceDetail = $this->invoiceDetailRepository->create($input);

        if ($request->ajax()) {
            $data = [
                'id'   => $invoiceDetail->id,
                'name' => $invoiceDetail->name,
            ];

            return response()->json($data);
        }

        Flash::success('Invoice Detail saved successfully.');

        return redirect(route('invoice-details.index'));
    }

    /**
     * Display the specified InvoiceDetail.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $invoiceDetail = $this->invoiceDetailRepository->findWithoutFail($id);

        if (empty($invoiceDetail)) {
            Flash::error('Invoice Detail not found');

            return redirect(route('invoice-details.index'));
        }

        return view('admin.invoice_details.show', compact('invoiceDetail'));
    }

    /**
     * Show the form for editing the specified InvoiceDetail.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $invoiceDetail = $this->invoiceDetailRepository->findWithoutFail($id);
        $products = $this->productRepository->all()->pluck('name', 'id');
        $invoices = $this->invoiceRepository->all()->pluck('name', 'id');
        $vatRates = $this->vatRateRepository->all()->pluck('name', 'id');

        if (empty($invoiceDetail)) {
            Flash::error('Invoice Detail not found');

            return redirect(route('invoice-details.index'));
        }

        return view('admin.invoice_details.edit', compact(
            'invoiceDetail',
            'products',
            'invoices',
            'vatRates'));
    }

    /**
     * Update the specified InvoiceDetail in storage.
     *
     * @param  int              $id
     * @param UpdateInvoiceDetailRequest $request
     *
     * @return Response
     */
    public function update($id, InvoiceDetailRequest $request)
    {
        $invoiceDetail = $this->invoiceDetailRepository->findWithoutFail($id);

        if (empty($invoiceDetail)) {
            Flash::error('Invoice Detail not found');

            return redirect(route('invoice-details.index'));
        }

        $invoiceDetail = $this->invoiceDetailRepository->update($request->all(), $id);

        Flash::success('Invoice Detail updated successfully.');

        return redirect(route('invoice-details.index'));
    }

    /**
     * Remove the specified InvoiceDetail from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $invoiceDetail = $this->invoiceDetailRepository->findWithoutFail($id);

        if (empty($invoiceDetail)) {
            Flash::error('Invoice Detail not found');

            return redirect(route('invoice-details.index'));
        }

        $this->invoiceDetailRepository->delete($id);

        Flash::success('Invoice Detail deleted successfully.');

        return redirect(route('invoice-details.index'));
    }
}
