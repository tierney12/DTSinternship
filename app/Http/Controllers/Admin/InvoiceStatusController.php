<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\InvoiceStatusRequest;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Repositories\InvoiceStatusRepository;

class InvoiceStatusController extends AppBaseController
{
    /** @var  InvoiceStatusRepository */

    private $invoiceStatusRepository;

    public function __construct(InvoiceStatusRepository $invoiceStatusRepo)
    {
        $this->invoiceStatusRepository = $invoiceStatusRepo;
    }

    /**
     * Display a listing of the InvoiceStatus.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->invoiceStatusRepository->pushCriteria(new RequestCriteria($request));
        $invoiceStatuses = $this->invoiceStatusRepository->all();

        return view('admin.invoice_statuses.index', compact('invoiceStatuses'));
    }

    /**
     * Show the form for creating a new InvoiceStatus.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        
        if ($request->ajax()) {
            return view('admin.invoice_statuses.form');
        }

        return view('admin.invoice_statuses.create');
    }

    /**
     * Store a newly created InvoiceStatus in storage.
     *
     * @param CreateInvoiceStatusRequest $request
     *
     * @return Response
     */
    public function store(InvoiceStatusRequest $request)
    {
        $input = $request->all();

        $invoiceStatus = $this->invoiceStatusRepository->create($input);

        if ($request->ajax()) {
            $data = [
                'id'   => $invoiceStatus->id,
                'name' => $invoiceStatus->name,
            ];

            return response()->json($data);
        }

        Flash::success('Invoice Status saved successfully.');

        return redirect(route('invoice-statuses.index'));
    }

    /**
     * Display the specified InvoiceStatus.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $invoiceStatus = $this->invoiceStatusRepository->findWithoutFail($id);

        if (empty($invoiceStatus)) {
            Flash::error('Invoice Status not found');

            return redirect(route('invoice-statuses.index'));
        }

        return view('admin.invoice_statuses.show', compact('invoiceStatus'));
    }

    /**
     * Show the form for editing the specified InvoiceStatus.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $invoiceStatus = $this->invoiceStatusRepository->findWithoutFail($id);
        
        if (empty($invoiceStatus)) {
            Flash::error('Invoice Status not found');

            return redirect(route('invoice-statuses.index'));
        }

        return view('admin.invoice_statuses.edit', compact(
            'invoiceStatus'));
    }

    /**
     * Update the specified InvoiceStatus in storage.
     *
     * @param  int              $id
     * @param UpdateInvoiceStatusRequest $request
     *
     * @return Response
     */
    public function update($id, InvoiceStatusRequest $request)
    {
        $invoiceStatus = $this->invoiceStatusRepository->findWithoutFail($id);

        if (empty($invoiceStatus)) {
            Flash::error('Invoice Status not found');

            return redirect(route('invoice-statuses.index'));
        }

        $invoiceStatus = $this->invoiceStatusRepository->update($request->all(), $id);

        Flash::success('Invoice Status updated successfully.');

        return redirect(route('invoice-statuses.index'));
    }

    /**
     * Remove the specified InvoiceStatus from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $invoiceStatus = $this->invoiceStatusRepository->findWithoutFail($id);

        if (empty($invoiceStatus)) {
            Flash::error('Invoice Status not found');

            return redirect(route('invoice-statuses.index'));
        }

        $this->invoiceStatusRepository->delete($id);

        Flash::success('Invoice Status deleted successfully.');

        return redirect(route('invoice-statuses.index'));
    }
}
