<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ServiceReportRecipientRequest;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Repositories\ServiceReportRecipientRepository;

class ServiceReportRecipientController extends AppBaseController
{
    /** @var  ServiceReportRecipientRepository */

    private $serviceReportRecipientRepository;

    public function __construct(ServiceReportRecipientRepository $serviceReportRecipientRepo)
    {
        $this->serviceReportRecipientRepository = $serviceReportRecipientRepo;
    }

    /**
     * Display a listing of the ServiceReportRecipient.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->serviceReportRecipientRepository->pushCriteria(new RequestCriteria($request));
        $serviceReportRecipients = $this->serviceReportRecipientRepository->all();

        return view('admin.service_report_recipients.index', compact('serviceReportRecipients'));
    }

    /**
     * Show the form for creating a new ServiceReportRecipient.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        
        if ($request->ajax()) {
            return view('admin.service_report_recipients.form');
        }

        return view('admin.service_report_recipients.create');
    }

    /**
     * Store a newly created ServiceReportRecipient in storage.
     *
     * @param CreateServiceReportRecipientRequest $request
     *
     * @return Response
     */
    public function store(ServiceReportRecipientRequest $request)
    {
        $input = $request->all();

        $serviceReportRecipient = $this->serviceReportRecipientRepository->create($input);

        if ($request->ajax()) {
            $data = [
                'id'   => $serviceReportRecipient->id,
                'name' => $serviceReportRecipient->name,
            ];

            return response()->json($data);
        }

        Flash::success('Service Report Recipient saved successfully.');

        return redirect(route('service-report-recipients.index'));
    }

    /**
     * Display the specified ServiceReportRecipient.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $serviceReportRecipient = $this->serviceReportRecipientRepository->findWithoutFail($id);

        if (empty($serviceReportRecipient)) {
            Flash::error('Service Report Recipient not found');

            return redirect(route('service-report-recipients.index'));
        }

        return view('admin.service_report_recipients.show', compact('serviceReportRecipient'));
    }

    /**
     * Show the form for editing the specified ServiceReportRecipient.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $serviceReportRecipient = $this->serviceReportRecipientRepository->findWithoutFail($id);
        
        if (empty($serviceReportRecipient)) {
            Flash::error('Service Report Recipient not found');

            return redirect(route('service-report-recipients.index'));
        }

        return view('admin.service_report_recipients.edit', compact(
            'serviceReportRecipient'));
    }

    /**
     * Update the specified ServiceReportRecipient in storage.
     *
     * @param  int              $id
     * @param UpdateServiceReportRecipientRequest $request
     *
     * @return Response
     */
    public function update($id, ServiceReportRecipientRequest $request)
    {
        $serviceReportRecipient = $this->serviceReportRecipientRepository->findWithoutFail($id);

        if (empty($serviceReportRecipient)) {
            Flash::error('Service Report Recipient not found');

            return redirect(route('service-report-recipients.index'));
        }

        $serviceReportRecipient = $this->serviceReportRecipientRepository->update($request->all(), $id);

        Flash::success('Service Report Recipient updated successfully.');

        return redirect(route('service-report-recipients.index'));
    }

    /**
     * Remove the specified ServiceReportRecipient from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $serviceReportRecipient = $this->serviceReportRecipientRepository->findWithoutFail($id);

        if (empty($serviceReportRecipient)) {
            Flash::error('Service Report Recipient not found');

            return redirect(route('service-report-recipients.index'));
        }

        $this->serviceReportRecipientRepository->delete($id);

        Flash::success('Service Report Recipient deleted successfully.');

        return redirect(route('service-report-recipients.index'));
    }
}
