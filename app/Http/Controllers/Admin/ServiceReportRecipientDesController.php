<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ServiceReportRecipientDesRequest;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Repositories\ServiceReportRecipientDesRepository;

class ServiceReportRecipientDesController extends AppBaseController
{
    /** @var  ServiceReportRecipientDesRepository */

    private $serviceReportRecipientDescriptionRepository;

    public function __construct(ServiceReportRecipientDesRepository $serviceReportRecipientDescriptionRepo)
    {
        $this->serviceReportRecipientDescriptionRepository = $serviceReportRecipientDescriptionRepo;
    }

    /**
     * Display a listing of the ServiceReportRecipientDes.
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
     * Show the form for creating a new ServiceReportRecipientDes.
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
     * Store a newly created ServiceReportRecipientDes in storage.
     *
     * @param CreateServiceReportRecipientDesRequest $request
     *
     * @return Response
     */
    public function store(ServiceReportRecipientDesRequest $request)
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

        return redirect(route('service-report-recipient-des.index'));
    }

    /**
     * Display the specified ServiceReportRecipientDes.
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

            return redirect(route('service-report-recipient-des.index'));
        }

        return view('admin.service_report_recipient_descriptions.show', compact('serviceReportRecipientDescription'));
    }

    /**
     * Show the form for editing the specified ServiceReportRecipientDes.
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

            return redirect(route('service-report-recipient-des.index'));
        }

        return view('admin.service_report_recipient_descriptions.edit', compact(
            'serviceReportRecipientDescription'));
    }

    /**
     * Update the specified ServiceReportRecipientDes in storage.
     *
     * @param  int              $id
     * @param UpdateServiceReportRecipientDesRequest $request
     *
     * @return Response
     */
    public function update($id, ServiceReportRecipientDesRequest $request)
    {
        $serviceReportRecipientDescription = $this->serviceReportRecipientDescriptionRepository->findWithoutFail($id);

        if (empty($serviceReportRecipientDescription)) {
            Flash::error('Service Report Recipient Description not found');

            return redirect(route('service-report-recipient-des.index'));
        }

        $serviceReportRecipientDescription = $this->serviceReportRecipientDescriptionRepository->update($request->all(), $id);

        Flash::success('Service Report Recipient Description updated successfully.');

        return redirect(route('service-report-recipient-des.index'));
    }

    /**
     * Remove the specified ServiceReportRecipientDes from storage.
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

            return redirect(route('service-report-recipient-des.index'));
        }

        $this->serviceReportRecipientDescriptionRepository->delete($id);

        Flash::success('Service Report Recipient Description deleted successfully.');

        return redirect(route('service-report-recipient-des.index'));
    }
}
