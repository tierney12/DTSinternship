<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\EstimateRequest;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Repositories\EstimateRepository;
use App\Repositories\DentistRepository;
use App\Repositories\JobLayoutRepository;

class EstimateController extends AppBaseController
{
    /** @var  EstimateRepository */

    private $estimateRepository;
    private $dentistRepository;
    private $jobLayoutRepository;

    public function __construct(EstimateRepository $estimateRepo, DentistRepository $dentistRepo, JobLayoutRepository $jobLayoutRepo)
    {
        $this->estimateRepository = $estimateRepo;
        $this->dentistRepository = $dentistRepo;
        $this->jobLayoutRepository = $jobLayoutRepo;
    }

    /**
     * Display a listing of the Estimate.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->estimateRepository->pushCriteria(new RequestCriteria($request));
        $estimates = $this->estimateRepository->all();

        return view('admin.estimates.index', compact('estimates'));
    }

    /**
     * Show the form for creating a new Estimate.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        $dentists = $this->dentistRepository->all()->pluck('name', 'id');
        $jobLayouts = $this->jobLayoutRepository->all()->pluck('name', 'id');

        if ($request->ajax()) {
            return view('admin.estimates.form');
        }

        return view('admin.estimates.create', compact(
            'dentists',
            'jobLayouts'));
    }

    /**
     * Store a newly created Estimate in storage.
     *
     * @param CreateEstimateRequest $request
     *
     * @return Response
     */
    public function store(EstimateRequest $request)
    {
        $input = $request->all();

        $estimate = $this->estimateRepository->create($input);

        if ($request->ajax()) {
            $data = [
                'id'   => $estimate->id,
                'name' => $estimate->name,
            ];

            return response()->json($data);
        }

        Flash::success('Estimate saved successfully.');

        return redirect(route('estimates.index'));
    }

    /**
     * Display the specified Estimate.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $estimate = $this->estimateRepository->findWithoutFail($id);

        if (empty($estimate)) {
            Flash::error('Estimate not found');

            return redirect(route('estimates.index'));
        }

        return view('admin.estimates.show', compact('estimate'));
    }

    /**
     * Show the form for editing the specified Estimate.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $estimate = $this->estimateRepository->findWithoutFail($id);
        $dentists = $this->dentistRepository->all()->pluck('name', 'id');
        $jobLayouts = $this->jobLayoutRepository->all()->pluck('name', 'id');

        if (empty($estimate)) {
            Flash::error('Estimate not found');

            return redirect(route('estimates.index'));
        }

        return view('admin.estimates.edit', compact(
            'estimate',
            'dentists',
            'jobLayouts'));
    }

    /**
     * Update the specified Estimate in storage.
     *
     * @param  int              $id
     * @param UpdateEstimateRequest $request
     *
     * @return Response
     */
    public function update($id, EstimateRequest $request)
    {
        $estimate = $this->estimateRepository->findWithoutFail($id);

        if (empty($estimate)) {
            Flash::error('Estimate not found');

            return redirect(route('estimates.index'));
        }

        $estimate = $this->estimateRepository->update($request->all(), $id);

        Flash::success('Estimate updated successfully.');

        return redirect(route('estimates.index'));
    }

    /**
     * Remove the specified Estimate from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $estimate = $this->estimateRepository->findWithoutFail($id);

        if (empty($estimate)) {
            Flash::error('Estimate not found');

            return redirect(route('estimates.index'));
        }

        $this->estimateRepository->delete($id);

        Flash::success('Estimate deleted successfully.');

        return redirect(route('estimates.index'));
    }
}
