<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ServiceReportIssueRequest;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Repositories\ServiceReportIssueRepository;

class ServiceReportIssueController extends AppBaseController
{
    /** @var  ServiceReportIssueRepository */

    private $serviceReportIssueRepository;

    public function __construct(ServiceReportIssueRepository $serviceReportIssueRepo)
    {
        $this->serviceReportIssueRepository = $serviceReportIssueRepo;
    }

    /**
     * Display a listing of the ServiceReportIssue.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->serviceReportIssueRepository->pushCriteria(new RequestCriteria($request));
        $serviceReportIssues = $this->serviceReportIssueRepository->all();

        return view('admin.service_report_issues.index', compact('serviceReportIssues'));
    }

    /**
     * Show the form for creating a new ServiceReportIssue.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        
        if ($request->ajax()) {
            return view('admin.service_report_issues.form');
        }

        return view('admin.service_report_issues.create');
    }

    /**
     * Store a newly created ServiceReportIssue in storage.
     *
     * @param CreateServiceReportIssueRequest $request
     *
     * @return Response
     */
    public function store(ServiceReportIssueRequest $request)
    {
        $input = $request->all();

        $serviceReportIssue = $this->serviceReportIssueRepository->create($input);

        if ($request->ajax()) {
            $data = [
                'id'   => $serviceReportIssue->id,
                'name' => $serviceReportIssue->name,
            ];

            return response()->json($data);
        }

        Flash::success('Service Report Issue saved successfully.');

        return redirect(route('service-report-issues.index'));
    }

    /**
     * Display the specified ServiceReportIssue.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $serviceReportIssue = $this->serviceReportIssueRepository->findWithoutFail($id);

        if (empty($serviceReportIssue)) {
            Flash::error('Service Report Issue not found');

            return redirect(route('service-report-issues.index'));
        }

        return view('admin.service_report_issues.show', compact('serviceReportIssue'));
    }

    /**
     * Show the form for editing the specified ServiceReportIssue.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $serviceReportIssue = $this->serviceReportIssueRepository->findWithoutFail($id);
        
        if (empty($serviceReportIssue)) {
            Flash::error('Service Report Issue not found');

            return redirect(route('service-report-issues.index'));
        }

        return view('admin.service_report_issues.edit', compact(
            'serviceReportIssue'));
    }

    /**
     * Update the specified ServiceReportIssue in storage.
     *
     * @param  int              $id
     * @param UpdateServiceReportIssueRequest $request
     *
     * @return Response
     */
    public function update($id, ServiceReportIssueRequest $request)
    {
        $serviceReportIssue = $this->serviceReportIssueRepository->findWithoutFail($id);

        if (empty($serviceReportIssue)) {
            Flash::error('Service Report Issue not found');

            return redirect(route('service-report-issues.index'));
        }

        $serviceReportIssue = $this->serviceReportIssueRepository->update($request->all(), $id);

        Flash::success('Service Report Issue updated successfully.');

        return redirect(route('service-report-issues.index'));
    }

    /**
     * Remove the specified ServiceReportIssue from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $serviceReportIssue = $this->serviceReportIssueRepository->findWithoutFail($id);

        if (empty($serviceReportIssue)) {
            Flash::error('Service Report Issue not found');

            return redirect(route('service-report-issues.index'));
        }

        $this->serviceReportIssueRepository->delete($id);

        Flash::success('Service Report Issue deleted successfully.');

        return redirect(route('service-report-issues.index'));
    }
}
