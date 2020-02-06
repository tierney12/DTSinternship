<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\DentistRequest;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Repositories\DentistRepository;
use App\Repositories\PracticeRepository;
use App\Repositories\AddressRepository;
use App\Repositories\AreaRepository;
use App\Repositories\DentistStatusRepository;
use App\Repositories\PricebandRepository;

class DentistController extends AppBaseController
{
    /** @var  DentistRepository */

    private $dentistRepository;
    private $practiceRepository;
    private $addressRepository;
    private $areaRepository;
    private $dentistStatusRepository;
    private $pricebandRepository;

    public function __construct(DentistRepository $dentistRepo, PracticeRepository $practiceRepo, AddressRepository $addressRepo, AreaRepository $areaRepo, DentistStatusRepository $dentistStatusRepo, PricebandRepository $pricebandRepo)
    {
        $this->dentistRepository = $dentistRepo;
        $this->practiceRepository = $practiceRepo;
        $this->addressRepository = $addressRepo;
        $this->areaRepository = $areaRepo;
        $this->dentistStatusRepository = $dentistStatusRepo;
        $this->pricebandRepository = $pricebandRepo;
    }

    /**
     * Display a listing of the Dentist.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->dentistRepository->pushCriteria(new RequestCriteria($request));
        $dentists = $this->dentistRepository->all();

        return view('admin.dentists.index', compact('dentists'));
    }

    /**
     * Show the form for creating a new Dentist.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        $practices = $this->practiceRepository->all()->pluck('name', 'id');
        $addresses = $this->addressRepository->all()->pluck('address_line_1',  'id');
        $areas = $this->areaRepository->all()->pluck('Area', 'id');
        $dentistStatuses = $this->dentistStatusRepository->all()->pluck('name', 'id');
        $pricebands = $this->pricebandRepository->findWhereIn('exception', [0])->pluck('name', 'id');
        $exceptions = $this->pricebandRepository->findWhereNotIn('exception', [0])->pluck('name', 'id');

        if ($request->ajax()) {
            return view('admin.dentists.form');
        }

        return view('admin.dentists.create', compact(
            'practices',
                'addresses',
            'areas',
            'dentistStatuses',
            'pricebands',
            'exceptions'));
    }

    /**
     * Store a newly created Dentist in storage.
     *
     * @param CreateDentistRequest $request
     *
     * @return Response
     */
    public function store(DentistRequest $request)
    {
        $input = $request->all();

        $dentist = $this->dentistRepository->create($input);

        if ($request->ajax()) {
            $data = [
                'id'   => $dentist->id
            ];

            return response()->json($data);
        }

        Flash::success('Dentist saved successfully.');

        return redirect(route('dentists.index'));
    }

    /**
     * Display the specified Dentist.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dentist = $this->dentistRepository->findWithoutFail($id);

        if (empty($dentist)) {
            Flash::error('Dentist not found');

            return redirect(route('dentists.index'));
        }

        return view('admin.dentists.show', compact('dentist'));
    }

    /**
     * Show the form for editing the specified Dentist.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dentist = $this->dentistRepository->findWithoutFail($id);
        $practices = $this->practiceRepository->all()->pluck('name', 'id');
        $addresses = $this->addressRepository->all()->pluck('address_line_1', 'id');
        $areas = $this->areaRepository->all()->pluck('Area', 'id');
        $dentistStatuses = $this->dentistStatusRepository->all()->pluck('name', 'id');
        $pricebands = $this->pricebandRepository->findWhereIn('exception', [0])->pluck('name', 'id');
        $exceptions = $this->pricebandRepository->findWhereNotIn('exception', [0])->pluck('name', 'id');

        if (empty($dentist)) {
            Flash::error('Dentist not found');

            return redirect(route('dentists.index'));
        }

        return view('admin.dentists.edit', compact(
            'dentist',
            'practices',
            'addresses',
            'areas',
            'dentistStatuses',
            'pricebands',
            'exceptions'));
    }

    /**
     * Update the specified Dentist in storage.
     *
     * @param  int $id
     * @param UpdateDentistRequest $request
     *
     * @return Response
     */
    public function update($id, DentistRequest $request)
    {
        $dentist = $this->dentistRepository->findWithoutFail($id);

        if (empty($dentist)) {
            Flash::error('Dentist not found');

            return redirect(route('dentists.index'));
        }

        $dentist = $this->dentistRepository->update($request->all(), $id);

        Flash::success('Dentist updated successfully.');

        return redirect(route('dentists.index'));
    }

    /**
     * Remove the specified Dentist from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dentist = $this->dentistRepository->findWithoutFail($id);

        if (empty($dentist)) {
            Flash::error('Dentist not found');

            return redirect(route('dentists.index'));
        }

        $this->dentistRepository->delete($id);

        Flash::success('Dentist deleted successfully.');

        return redirect(route('dentists.index'));
    }
}
