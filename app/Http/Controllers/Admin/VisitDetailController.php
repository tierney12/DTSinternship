<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\VisitDetailRequest;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Repositories\VisitDetailRepository;

class VisitDetailController extends AppBaseController
{
    /** @var  VisitDetailRepository */

    private $visitDetailRepository;

    public function __construct(VisitDetailRepository $visitDetailRepo)
    {
        $this->visitDetailRepository = $visitDetailRepo;
    }

    /**
     * Display a listing of the VisitDetail.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->visitDetailRepository->pushCriteria(new RequestCriteria($request));
        $visitDetails = $this->visitDetailRepository->all();

        return view('admin.visit_details.index', compact('visitDetails'));
    }

    /**
     * Show the form for creating a new VisitDetail.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        
        if ($request->ajax()) {
            return view('admin.visit_details.form');
        }

        return view('admin.visit_details.create');
    }

    /**
     * Store a newly created VisitDetail in storage.
     *
     * @param CreateVisitDetailRequest $request
     *
     * @return Response
     */
    public function store(VisitDetailRequest $request)
    {
        $input = $request->all();

        $visitDetail = $this->visitDetailRepository->create($input);

        if ($request->ajax()) {
            $data = [
                'id'   => $visitDetail->id,
                'name' => $visitDetail->name,
            ];

            return response()->json($data);
        }

        Flash::success('Visit Detail saved successfully.');

        return redirect(route('visit-details.index'));
    }

    /**
     * Display the specified VisitDetail.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $visitDetail = $this->visitDetailRepository->findWithoutFail($id);

        if (empty($visitDetail)) {
            Flash::error('Visit Detail not found');

            return redirect(route('visit-details.index'));
        }

        return view('admin.visit_details.show', compact('visitDetail'));
    }

    /**
     * Show the form for editing the specified VisitDetail.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $visitDetail = $this->visitDetailRepository->findWithoutFail($id);
        
        if (empty($visitDetail)) {
            Flash::error('Visit Detail not found');

            return redirect(route('visit-details.index'));
        }

        return view('admin.visit_details.edit', compact(
            'visitDetail'));
    }

    /**
     * Update the specified VisitDetail in storage.
     *
     * @param  int              $id
     * @param UpdateVisitDetailRequest $request
     *
     * @return Response
     */
    public function update($id, VisitDetailRequest $request)
    {
        $visitDetail = $this->visitDetailRepository->findWithoutFail($id);

        if (empty($visitDetail)) {
            Flash::error('Visit Detail not found');

            return redirect(route('visit-details.index'));
        }

        $visitDetail = $this->visitDetailRepository->update($request->all(), $id);

        Flash::success('Visit Detail updated successfully.');

        return redirect(route('visit-details.index'));
    }

    /**
     * Remove the specified VisitDetail from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $visitDetail = $this->visitDetailRepository->findWithoutFail($id);

        if (empty($visitDetail)) {
            Flash::error('Visit Detail not found');

            return redirect(route('visit-details.index'));
        }

        $this->visitDetailRepository->delete($id);

        Flash::success('Visit Detail deleted successfully.');

        return redirect(route('visit-details.index'));
    }
}
