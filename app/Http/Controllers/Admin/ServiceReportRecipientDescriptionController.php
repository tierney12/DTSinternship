<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ServiceReportRecipientDescriptionRequest;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Repositories\ServiceReportRecipientDescriptionRepository;

class ServiceReportRecipientDescriptionController extends AppBaseController
{
    /** @var  ServiceReportRecipientDescriptionRepository */

    private $serviceReportRecipientDescriptionRepository;

    public function __construct(ServiceReportRecipientDescriptionRepository $serviceReportRecipientDescriptionRepo)
    {
        $this->serviceReportRecipientDescriptionRepository = $serviceReportRecipientDescriptionRepo;
    }

    /**
     * Display a listing of the ServiceReportRecipientDescription.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->serviceReportRecipientDescriptionRepository->pushCriteria(new RequestCriteria($request));
        $serviceReportRecipientDescriptions = $this->serviceReportRecipientDescriptionRepository->all();

        return view('admin.service_report_recipient_descriptions.index', compact('serviceReportRecipientDescriptions'));
    }

    /**
     * Show the form for creating a new ServiceReportRecipientDescription.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        
        if ($request->ajax()) {
            return view('admin.service_report_recipient_descriptions.form');
        }

        return view('admin.service_report_recipient_descriptions.create');
    }

    /**
     * Store a newly created ServiceReportRecipientDescription in storage.
     *
     * @param CreateServiceReportRecipientDescriptionRequest $request
     *
     * @return Response
     */
    public function store(ServiceReportRecipientDescriptionRequest $request)
    {
        $input = $request->all();

        $serviceReportRecipientDescription = $this->serviceReportRecipientDescriptionRepository->create($input);

        if ($request->ajax()) {
            $data = [
                'id'   => $serviceReportRecipientDescription->id,
                'name' => $serviceReportRecipientDescription->name,
            ];

            return response()->json($data);
        }

        Flash::success('Service Report Recipient Description saved successfully.');

        return redirect(route('service-report-recipient-descriptions.index'));
    }

    /**
     * Display the specified ServiceReportRecipientDescription.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $serviceReportRecipientDescription = $this->serviceReportRecipientDescriptionRepository->findWithoutFail($id);

        if (empty($serviceReportRecipientDescription)) {
            Flash::error('Service Report Recipient Description not found');

            return redirect(route('service-report-recipient-descriptions.index'));
        }

        return view('admin.service_report_recipient_descriptions.show', compact('serviceReportRecipientDescription'));
    }

    /**
     * Show the form for editing the specified ServiceReportRecipientDescription.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $serviceReportRecipientDescription = $this->serviceReportRecipientDescriptionRepository->findWithoutFail($id);
        
        if (empty($serviceReportRecipientDescription)) {
            Flash::error('Service Report Recipient Description not found');

            return redirect(route('service-report-recipient-descriptions.index'));
        }

        return view('admin.service_report_recipient_descriptions.edit', compact(
            'serviceReportRecipientDescription'));
    }

    /**
     * Update the specified ServiceReportRecipientDescription in storage.
     *
     * @param  int              $id
     * @param UpdateServiceReportRecipientDescriptionRequest $request
     *
     * @return Response
     */
    public function update($id, ServiceReportRecipientDescriptionRequest $request)
    {
        $serviceReportRecipientDescription = $this->serviceReportRecipientDescriptionRepository->findWithoutFail($id);

        if (empty($serviceReportRecipientDescription)) {
            Flash::error('Service Report Recipient Description not found');

            return redirect(route('service-report-recipient-descriptions.index'));
        }

        $serviceReportRecipientDescription = $this->serviceReportRecipientDescriptionRepository->update($request->all(), $id);

        Flash::success('Service Report Recipient Description updated successfully.');

        return redirect(route('service-report-recipient-descriptions.index'));
    }

    /**
     * Remove the specified ServiceReportRecipientDescription from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $serviceReportRecipientDescription = $this->serviceReportRecipientDescriptionRepository->findWithoutFail($id);

        if (empty($serviceReportRecipientDescription)) {
            Flash::error('Service Report Recipient Description not found');

            return redirect(route('service-report-recipient-descriptions.index'));
        }

        $this->serviceReportRecipientDescriptionRepository->delete($id);

        Flash::success('Service Report Recipient Description deleted successfully.');

        return redirect(route('service-report-recipient-descriptions.index'));
    }
}
