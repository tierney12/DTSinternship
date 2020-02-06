<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\InvoiceRequest;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Repositories\InvoiceRepository;
use App\Repositories\JobRepository;
use App\Repositories\InvoiceStatusRepository;

class InvoiceController extends AppBaseController
{
    /** @var  InvoiceRepository */

    private $invoiceRepository;
    private $jobRepository;
    private $invoiceStatusRepository;

    public function __construct(InvoiceRepository $invoiceRepo, JobRepository $jobRepo, InvoiceStatusRepository $invoiceStatusRepo)
    {
        $this->invoiceRepository = $invoiceRepo;
        $this->jobRepository = $jobRepo;
        $this->invoiceStatusRepository = $invoiceStatusRepo;
    }

    /**
     * Display a listing of the Invoice.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->invoiceRepository->pushCriteria(new RequestCriteria($request));
        $invoices = $this->invoiceRepository->all();

        return view('admin.invoices.index', compact('invoices'));
    }

    /**
     * Show the form for creating a new Invoice.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        $jobs = $this->jobRepository->all()->pluck('job_no', 'id');
        $invoiceStatuses = $this->invoiceStatusRepository->all()->pluck('name', 'id');

        if ($request->ajax()) {
            return view('admin.invoices.form');
        }

        return view('admin.invoices.create', compact(
            'jobs',
            'invoiceStatuses'));
    }

    /**
     * Store a newly created Invoice in storage.
     *
     * @param CreateInvoiceRequest $request
     *
     * @return Response
     */
    public function store(InvoiceRequest $request)
    {
        $input = $request->all();

        $invoice = $this->invoiceRepository->create($input);

        if ($request->ajax()) {
            $data = [
                'id'   => $invoice->id,
                'name' => $invoice->name,
            ];

            return response()->json($data);
        }

        Flash::success('Invoice saved successfully.');

        return redirect(route('invoices.index'));
    }

    /**
     * Display the specified Invoice.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $invoice = $this->invoiceRepository->findWithoutFail($id);

        if (empty($invoice)) {
            Flash::error('Invoice not found');

            return redirect(route('invoices.index'));
        }

        return view('admin.invoices.show', compact('invoice'));
    }

    /**
     * Show the form for editing the specified Invoice.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $invoice = $this->invoiceRepository->findWithoutFail($id);
        $jobs = $this->jobRepository->all()->pluck('job_no', 'id');
        $invoiceStatuses = $this->invoiceStatusRepository->all()->pluck('name', 'id');

        if (empty($invoice)) {
            Flash::error('Invoice not found');

            return redirect(route('invoices.index'));
        }

        return view('admin.invoices.edit', compact(
            'invoice',
            'jobs',
            'invoiceStatuses'));
    }

    /**
     * Update the specified Invoice in storage.
     *
     * @param  int              $id
     * @param UpdateInvoiceRequest $request
     *
     * @return Response
     */
    public function update($id, InvoiceRequest $request)
    {
        $invoice = $this->invoiceRepository->findWithoutFail($id);

        if (empty($invoice)) {
            Flash::error('Invoice not found');

            return redirect(route('invoices.index'));
        }

        $invoice = $this->invoiceRepository->update($request->all(), $id);

        Flash::success('Invoice updated successfully.');

        return redirect(route('invoices.index'));
    }

    /**
     * Remove the specified Invoice from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $invoice = $this->invoiceRepository->findWithoutFail($id);

        if (empty($invoice)) {
            Flash::error('Invoice not found');

            return redirect(route('invoices.index'));
        }

        $this->invoiceRepository->delete($id);

        Flash::success('Invoice deleted successfully.');

        return redirect(route('invoices.index'));
    }
}
