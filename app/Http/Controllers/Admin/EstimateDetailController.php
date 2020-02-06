<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\EstimateDetailRequest;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Repositories\EstimateDetailRepository;
use App\Repositories\EstimateRepository;

class EstimateDetailController extends AppBaseController
{
    /** @var  EstimateDetailRepository */

    private $estimateDetailRepository;
    private $estimateRepository;

    public function __construct(EstimateDetailRepository $estimateDetailRepo, EstimateRepository $estimateRepo)
    {
        $this->estimateDetailRepository = $estimateDetailRepo;
        $this->estimateRepository = $estimateRepo;
    }

    /**
     * Display a listing of the EstimateDetail.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->estimateDetailRepository->pushCriteria(new RequestCriteria($request));
        $estimateDetails = $this->estimateDetailRepository->all();

        return view('admin.estimate_details.index', compact('estimateDetails'));
    }

    /**
     * Show the form for creating a new EstimateDetail.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        $estimates = $this->estimateRepository->all()->pluck('name', 'id');

        if ($request->ajax()) {
            return view('admin.estimate_details.form');
        }

        return view('admin.estimate_details.create', compact(
            'estimates'));
    }

    /**
     * Store a newly created EstimateDetail in storage.
     *
     * @param CreateEstimateDetailRequest $request
     *
     * @return Response
     */
    public function store(EstimateDetailRequest $request)
    {
        $input = $request->all();

        $estimateDetail = $this->estimateDetailRepository->create($input);

        if ($request->ajax()) {
            $data = [
                'id'   => $estimateDetail->id,
                'name' => $estimateDetail->name,
            ];

            return response()->json($data);
        }

        Flash::success('Estimate Detail saved successfully.');

        return redirect(route('estimate-details.index'));
    }

    /**
     * Display the specified EstimateDetail.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $estimateDetail = $this->estimateDetailRepository->findWithoutFail($id);

        if (empty($estimateDetail)) {
            Flash::error('Estimate Detail not found');

            return redirect(route('estimate-details.index'));
        }

        return view('admin.estimate_details.show', compact('estimateDetail'));
    }

    /**
     * Show the form for editing the specified EstimateDetail.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $estimateDetail = $this->estimateDetailRepository->findWithoutFail($id);
        $estimates = $this->estimateRepository->all()->pluck('name', 'id');

        if (empty($estimateDetail)) {
            Flash::error('Estimate Detail not found');

            return redirect(route('estimate-details.index'));
        }

        return view('admin.estimate_details.edit', compact(
            'estimateDetail',
            'estimates'));
    }

    /**
     * Update the specified EstimateDetail in storage.
     *
     * @param  int              $id
     * @param UpdateEstimateDetailRequest $request
     *
     * @return Response
     */
    public function update($id, EstimateDetailRequest $request)
    {
        $estimateDetail = $this->estimateDetailRepository->findWithoutFail($id);

        if (empty($estimateDetail)) {
            Flash::error('Estimate Detail not found');

            return redirect(route('estimate-details.index'));
        }

        $estimateDetail = $this->estimateDetailRepository->update($request->all(), $id);

        Flash::success('Estimate Detail updated successfully.');

        return redirect(route('estimate-details.index'));
    }

    /**
     * Remove the specified EstimateDetail from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $estimateDetail = $this->estimateDetailRepository->findWithoutFail($id);

        if (empty($estimateDetail)) {
            Flash::error('Estimate Detail not found');

            return redirect(route('estimate-details.index'));
        }

        $this->estimateDetailRepository->delete($id);

        Flash::success('Estimate Detail deleted successfully.');

        return redirect(route('estimate-details.index'));
    }
}
