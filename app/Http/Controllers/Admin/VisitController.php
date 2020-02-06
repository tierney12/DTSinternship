<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\VisitRequest;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Repositories\VisitRepository;
use App\Repositories\DentistRepository;
use App\Repositories\VisitsDetailRepository;

class VisitController extends AppBaseController
{
    /** @var  VisitRepository */

    private $visitRepository;
    private $dentistRepository;
    private $visitDetailRepository;

    public function __construct(VisitRepository $visitRepo, DentistRepository $dentistRepo, VisitsDetailRepository $visitDetailRepo)
    {
        $this->visitRepository = $visitRepo;
        $this->dentistRepository = $dentistRepo;
        $this->visitDetailRepository = $visitDetailRepo;
    }

    /**
     * Display a listing of the Visit.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->visitRepository->pushCriteria(new RequestCriteria($request));
        $visits = $this->visitRepository->all();

        return view('admin.visits.index', compact('visits'));
    }

    /**
     * Show the form for creating a new Visit.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        $dentists = $this->dentistRepository->all()->pluck('name', 'id');
        $visitDetails = $this->visitDetailRepository->all()->pluck('name', 'id');

        if ($request->ajax()) {
            return view('admin.visits.form');
        }

        return view('admin.visits.create', compact(
            'dentists',
            'visitDetails'));
    }

    /**
     * Store a newly created Visit in storage.
     *
     * @param CreateVisitRequest $request
     *
     * @return Response
     */
    public function store(VisitRequest $request)
    {
        $input = $request->all();

        $visit = $this->visitRepository->create($input);

        if ($request->ajax()) {
            $data = [
                'id'   => $visit->id,
                'name' => $visit->name,
            ];

            return response()->json($data);
        }

        Flash::success('Visit saved successfully.');

        return redirect(route('visits.index'));
    }

    /**
     * Display the specified Visit.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $visit = $this->visitRepository->findWithoutFail($id);

        if (empty($visit)) {
            Flash::error('Visit not found');

            return redirect(route('visits.index'));
        }

        return view('admin.visits.show', compact('visit'));
    }

    /**
     * Show the form for editing the specified Visit.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $visit = $this->visitRepository->findWithoutFail($id);
        $dentists = $this->dentistRepository->all()->pluck('name', 'id');
        $visitDetails = $this->visitDetailRepository->all()->pluck('name', 'id');

        if (empty($visit)) {
            Flash::error('Visit not found');

            return redirect(route('visits.index'));
        }

        return view('admin.visits.edit', compact(
            'visit',
            'dentists',
            'visitDetails'));
    }

    /**
     * Update the specified Visit in storage.
     *
     * @param  int              $id
     * @param UpdateVisitRequest $request
     *
     * @return Response
     */
    public function update($id, VisitRequest $request)
    {
        $visit = $this->visitRepository->findWithoutFail($id);

        if (empty($visit)) {
            Flash::error('Visit not found');

            return redirect(route('visits.index'));
        }

        $visit = $this->visitRepository->update($request->all(), $id);

        Flash::success('Visit updated successfully.');

        return redirect(route('visits.index'));
    }

    /**
     * Remove the specified Visit from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $visit = $this->visitRepository->findWithoutFail($id);

        if (empty($visit)) {
            Flash::error('Visit not found');

            return redirect(route('visits.index'));
        }

        $this->visitRepository->delete($id);

        Flash::success('Visit deleted successfully.');

        return redirect(route('visits.index'));
    }
}
