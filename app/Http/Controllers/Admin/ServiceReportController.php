<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ServiceReportRequest;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Repositories\ServiceReportRepository;
use App\Repositories\DentistRepository;
use App\Repositories\JobRepository;
use App\Repositories\ServiceReportIssueRepository;

class ServiceReportController extends AppBaseController
{
    /** @var  ServiceReportRepository */

    private $serviceReportRepository;
    private $dentistRepository;
    private $jobRepository;
    private $serviceReportIssueRepository;

    public function __construct(ServiceReportRepository $serviceReportRepo, DentistRepository $dentistRepo, JobRepository $jobRepo, ServiceReportIssueRepository $serviceReportIssueRepo)
    {
        $this->serviceReportRepository = $serviceReportRepo;
        $this->dentistRepository = $dentistRepo;
        $this->jobRepository = $jobRepo;
        $this->serviceReportIssueRepository = $serviceReportIssueRepo;
    }

    /**
     * Display a listing of the ServiceReport.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->serviceReportRepository->pushCriteria(new RequestCriteria($request));
        $serviceReports = $this->serviceReportRepository->all();

        return view('admin.service_reports.index', compact('serviceReports'));
    }

    /**
     * Show the form for creating a new ServiceReport.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        $dentists = $this->dentistRepository->all()->pluck('name', 'id');
        $jobs = $this->jobRepository->all()->pluck('name', 'id');
        $serviceReportIssues = $this->serviceReportIssueRepository->all()->pluck('name', 'id');

        if ($request->ajax()) {
            return view('admin.service_reports.form');
        }

        return view('admin.service_reports.create', compact(
            'dentists',
            'jobs',
            'serviceReportIssues'));
    }

    /**
     * Store a newly created ServiceReport in storage.
     *
     * @param CreateServiceReportRequest $request
     *
     * @return Response
     */
    public function store(ServiceReportRequest $request)
    {
        $input = $request->all();

        $serviceReport = $this->serviceReportRepository->create($input);

        if ($request->ajax()) {
            $data = [
                'id'   => $serviceReport->id,
                'name' => $serviceReport->name,
            ];

            return response()->json($data);
        }

        Flash::success('Service Report saved successfully.');

        return redirect(route('service-reports.index'));
    }

    /**
     * Display the specified ServiceReport.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $serviceReport = $this->serviceReportRepository->findWithoutFail($id);

        if (empty($serviceReport)) {
            Flash::error('Service Report not found');

            return redirect(route('service-reports.index'));
        }

        return view('admin.service_reports.show', compact('serviceReport'));
    }

    /**
     * Show the form for editing the specified ServiceReport.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $serviceReport = $this->serviceReportRepository->findWithoutFail($id);
        $dentists = $this->dentistRepository->all()->pluck('name', 'id');
        $jobs = $this->jobRepository->all()->pluck('name', 'id');
        $serviceReportIssues = $this->serviceReportIssueRepository->all()->pluck('name', 'id');

        if (empty($serviceReport)) {
            Flash::error('Service Report not found');

            return redirect(route('service-reports.index'));
        }

        return view('admin.service_reports.edit', compact(
            'serviceReport',
            'dentists',
            'jobs',
            'serviceReportIssues'));
    }

    /**
     * Update the specified ServiceReport in storage.
     *
     * @param  int              $id
     * @param UpdateServiceReportRequest $request
     *
     * @return Response
     */
    public function update($id, ServiceReportRequest $request)
    {
        $serviceReport = $this->serviceReportRepository->findWithoutFail($id);

        if (empty($serviceReport)) {
            Flash::error('Service Report not found');

            return redirect(route('service-reports.index'));
        }

        $serviceReport = $this->serviceReportRepository->update($request->all(), $id);

        Flash::success('Service Report updated successfully.');

        return redirect(route('service-reports.index'));
    }

    /**
     * Remove the specified ServiceReport from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $serviceReport = $this->serviceReportRepository->findWithoutFail($id);

        if (empty($serviceReport)) {
            Flash::error('Service Report not found');

            return redirect(route('service-reports.index'));
        }

        $this->serviceReportRepository->delete($id);

        Flash::success('Service Report deleted successfully.');

        return redirect(route('service-reports.index'));
    }
}
