<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\DentistSpendRequest;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Repositories\DentistSpendRepository;
use App\Repositories\DentistRepository;

class DentistSpendController extends AppBaseController
{
    /** @var  DentistSpendRepository */

    private $dentistSpendRepository;
    private $dentistRepository;

    public function __construct(DentistSpendRepository $dentistSpendRepo, DentistRepository $dentistRepo)
    {
        $this->dentistSpendRepository = $dentistSpendRepo;
        $this->dentistRepository = $dentistRepo;
    }

    /**
     * Display a listing of the DentistSpend.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->dentistSpendRepository->pushCriteria(new RequestCriteria($request));
        $dentistSpends = $this->dentistSpendRepository->all();

        return view('admin.dentist_spends.index', compact('dentistSpends'));
    }

    /**
     * Show the form for creating a new DentistSpend.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        $dentists = $this->dentistRepository->all()->pluck('name', 'id');

        if ($request->ajax()) {
            return view('admin.dentist_spends.form');
        }

        return view('admin.dentist_spends.create', compact(
            'dentists'));
    }

    /**
     * Store a newly created DentistSpend in storage.
     *
     * @param CreateDentistSpendRequest $request
     *
     * @return Response
     */
    public function store(DentistSpendRequest $request)
    {
        $input = $request->all();

        $dentistSpend = $this->dentistSpendRepository->create($input);

        if ($request->ajax()) {
            $data = [
                'id'   => $dentistSpend->id,
                'name' => $dentistSpend->name,
            ];

            return response()->json($data);
        }

        Flash::success('Dentist Spend saved successfully.');

        return redirect(route('dentist-spends.index'));
    }

    /**
     * Display the specified DentistSpend.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dentistSpend = $this->dentistSpendRepository->findWithoutFail($id);

        if (empty($dentistSpend)) {
            Flash::error('Dentist Spend not found');

            return redirect(route('dentist-spends.index'));
        }

        return view('admin.dentist_spends.show', compact('dentistSpend'));
    }

    /**
     * Show the form for editing the specified DentistSpend.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dentistSpend = $this->dentistSpendRepository->findWithoutFail($id);
        $dentists = $this->dentistRepository->all()->pluck('name', 'id');

        if (empty($dentistSpend)) {
            Flash::error('Dentist Spend not found');

            return redirect(route('dentist-spends.index'));
        }

        return view('admin.dentist_spends.edit', compact(
            'dentistSpend',
            'dentists'));
    }

    /**
     * Update the specified DentistSpend in storage.
     *
     * @param  int              $id
     * @param UpdateDentistSpendRequest $request
     *
     * @return Response
     */
    public function update($id, DentistSpendRequest $request)
    {
        $dentistSpend = $this->dentistSpendRepository->findWithoutFail($id);

        if (empty($dentistSpend)) {
            Flash::error('Dentist Spend not found');

            return redirect(route('dentist-spends.index'));
        }

        $dentistSpend = $this->dentistSpendRepository->update($request->all(), $id);

        Flash::success('Dentist Spend updated successfully.');

        return redirect(route('dentist-spends.index'));
    }

    /**
     * Remove the specified DentistSpend from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dentistSpend = $this->dentistSpendRepository->findWithoutFail($id);

        if (empty($dentistSpend)) {
            Flash::error('Dentist Spend not found');

            return redirect(route('dentist-spends.index'));
        }

        $this->dentistSpendRepository->delete($id);

        Flash::success('Dentist Spend deleted successfully.');

        return redirect(route('dentist-spends.index'));
    }
}
