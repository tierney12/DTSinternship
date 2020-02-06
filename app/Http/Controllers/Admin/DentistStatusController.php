<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\DentistStatusRequest;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Repositories\DentistStatusRepository;

class DentistStatusController extends AppBaseController
{
    /** @var  DentistStatusRepository */

    private $dentistStatusRepository;

    public function __construct(DentistStatusRepository $dentistStatusRepo)
    {
        $this->dentistStatusRepository = $dentistStatusRepo;
    }

    /**
     * Display a listing of the DentistStatus.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->dentistStatusRepository->pushCriteria(new RequestCriteria($request));
        $dentistStatuses = $this->dentistStatusRepository->all();

        return view('admin.dentist_statuses.index', compact('dentistStatuses'));
    }

    /**
     * Show the form for creating a new DentistStatus.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        
        if ($request->ajax()) {
            return view('admin.dentist_statuses.form');
        }

        return view('admin.dentist_statuses.create');
    }

    /**
     * Store a newly created DentistStatus in storage.
     *
     * @param CreateDentistStatusRequest $request
     *
     * @return Response
     */
    public function store(DentistStatusRequest $request)
    {
        $input = $request->all();

        $dentistStatus = $this->dentistStatusRepository->create($input);

        if ($request->ajax()) {
            $data = [
                'id'   => $dentistStatus->id,
                'name' => $dentistStatus->name,
            ];

            return response()->json($data);
        }

        Flash::success('Dentist Status saved successfully.');

        return redirect(route('dentist-statuses.index'));
    }

    /**
     * Display the specified DentistStatus.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dentistStatus = $this->dentistStatusRepository->findWithoutFail($id);

        if (empty($dentistStatus)) {
            Flash::error('Dentist Status not found');

            return redirect(route('dentist-statuses.index'));
        }

        return view('admin.dentist_statuses.show', compact('dentistStatus'));
    }

    /**
     * Show the form for editing the specified DentistStatus.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dentistStatus = $this->dentistStatusRepository->findWithoutFail($id);
        
        if (empty($dentistStatus)) {
            Flash::error('Dentist Status not found');

            return redirect(route('dentist-statuses.index'));
        }

        return view('admin.dentist_statuses.edit', compact(
            'dentistStatus'));
    }

    /**
     * Update the specified DentistStatus in storage.
     *
     * @param  int              $id
     * @param UpdateDentistStatusRequest $request
     *
     * @return Response
     */
    public function update($id, DentistStatusRequest $request)
    {
        $dentistStatus = $this->dentistStatusRepository->findWithoutFail($id);

        if (empty($dentistStatus)) {
            Flash::error('Dentist Status not found');

            return redirect(route('dentist-statuses.index'));
        }

        $dentistStatus = $this->dentistStatusRepository->update($request->all(), $id);

        Flash::success('Dentist Status updated successfully.');

        return redirect(route('dentist-statuses.index'));
    }

    /**
     * Remove the specified DentistStatus from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dentistStatus = $this->dentistStatusRepository->findWithoutFail($id);

        if (empty($dentistStatus)) {
            Flash::error('Dentist Status not found');

            return redirect(route('dentist-statuses.index'));
        }

        $this->dentistStatusRepository->delete($id);

        Flash::success('Dentist Status deleted successfully.');

        return redirect(route('dentist-statuses.index'));
    }
}
