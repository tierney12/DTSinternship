<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\DentistMailingListRequest;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Repositories\DentistMailingListRepository;
use App\Repositories\DentistRepository;
use App\Repositories\MailingListRepository;

class DentistMailingListController extends AppBaseController
{
    /** @var  DentistMailingListRepository */

    private $dentistMailingListRepository;
    private $dentistRepository;
    private $mailingListRepository;

    public function __construct(DentistMailingListRepository $dentistMailingListRepo, DentistRepository $dentistRepo, MailingListRepository $mailingListRepo)
    {
        $this->dentistMailingListRepository = $dentistMailingListRepo;
        $this->dentistRepository = $dentistRepo;
        $this->mailingListRepository = $mailingListRepo;
    }

    /**
     * Display a listing of the DentistMailingList.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->dentistMailingListRepository->pushCriteria(new RequestCriteria($request));
        $dentistMailingLists = $this->dentistMailingListRepository->all();

        return view('admin.dentist_mailing_list.index', compact('dentistMailingLists'));
    }

    /**
     * Show the form for creating a new DentistMailingList.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        $dentists = $this->dentistRepository->all()->pluck('name', 'id');
        $mailingLists = $this->mailingListRepository->all()->pluck('name', 'id');

        if ($request->ajax()) {
            return view('admin.dentist_mailing_list.form');
        }

        return view('admin.dentist_mailing_list.create', compact(
            'dentists',
            'mailingLists'));
    }

    /**
     * Store a newly created DentistMailingList in storage.
     *
     * @param CreateDentistMailingListRequest $request
     *
     * @return Response
     */
    public function store(DentistMailingListRequest $request)
    {
        $input = $request->all();

        $dentistMailingList = $this->dentistMailingListRepository->create($input);

        if ($request->ajax()) {
            $data = [
                'id'   => $dentistMailingList->id,
                'name' => $dentistMailingList->name,
            ];

            return response()->json($data);
        }

        Flash::success('Dentist Mailing List saved successfully.');

        return redirect(route('dentist-mailing-lists.index'));
    }

    /**
     * Display the specified DentistMailingList.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dentistMailingList = $this->dentistMailingListRepository->findWithoutFail($id);

        if (empty($dentistMailingList)) {
            Flash::error('Dentist Mailing List not found');

            return redirect(route('dentist-mailing-lists.index'));
        }

        return view('admin.dentist_mailing_list.show', compact('dentistMailingList'));
    }

    /**
     * Show the form for editing the specified DentistMailingList.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dentistMailingList = $this->dentistMailingListRepository->findWithoutFail($id);
        $dentists = $this->dentistRepository->all()->pluck('name', 'id');
        $mailingLists = $this->mailingListRepository->all()->pluck('name', 'id');

        if (empty($dentistMailingList)) {
            Flash::error('Dentist Mailing List not found');

            return redirect(route('dentist-mailing-lists.index'));
        }

        return view('admin.dentist_mailing_list.edit', compact(
            'dentistMailingList',
            'dentists',
            'mailingLists'));
    }

    /**
     * Update the specified DentistMailingList in storage.
     *
     * @param  int              $id
     * @param UpdateDentistMailingListRequest $request
     *
     * @return Response
     */
    public function update($id, DentistMailingListRequest $request)
    {
        $dentistMailingList = $this->dentistMailingListRepository->findWithoutFail($id);

        if (empty($dentistMailingList)) {
            Flash::error('Dentist Mailing List not found');

            return redirect(route('dentist-mailing-lists.index'));
        }

        $dentistMailingList = $this->dentistMailingListRepository->update($request->all(), $id);

        Flash::success('Dentist Mailing List updated successfully.');

        return redirect(route('dentist-mailing-lists.index'));
    }

    /**
     * Remove the specified DentistMailingList from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dentistMailingList = $this->dentistMailingListRepository->findWithoutFail($id);

        if (empty($dentistMailingList)) {
            Flash::error('Dentist Mailing List not found');

            return redirect(route('dentist-mailing-lists.index'));
        }

        $this->dentistMailingListRepository->delete($id);

        Flash::success('Dentist Mailing List deleted successfully.');

        return redirect(route('dentist-mailing-lists.index'));
    }
}
