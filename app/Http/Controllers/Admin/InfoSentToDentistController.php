<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\InfoSentToDentistRequest;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Repositories\InfoSentToDentistRepository;
use App\Repositories\DentistRepository;

class InfoSentToDentistController extends AppBaseController
{
    /** @var  InfoSentToDentistRepository */

    private $infoSentToDentistRepository;
    private $dentistRepository;

    public function __construct(InfoSentToDentistRepository $infoSentToDentistRepo, DentistRepository $dentistRepo)
    {
        $this->infoSentToDentistRepository = $infoSentToDentistRepo;
        $this->dentistRepository = $dentistRepo;
    }

    /**
     * Display a listing of the InfoSentToDentist.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->infoSentToDentistRepository->pushCriteria(new RequestCriteria($request));
        $infoSentToDentists = $this->infoSentToDentistRepository->all();

        return view('admin.info_sent_to_dentists.index', compact('infoSentToDentists'));
    }

    /**
     * Show the form for creating a new InfoSentToDentist.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        $dentists = $this->dentistRepository->all()->pluck('name', 'id');

        if ($request->ajax()) {
            return view('admin.info_sent_to_dentists.form');
        }

        return view('admin.info_sent_to_dentists.create', compact(
            'dentists'));
    }

    /**
     * Store a newly created InfoSentToDentist in storage.
     *
     * @param CreateInfoSentToDentistRequest $request
     *
     * @return Response
     */
    public function store(InfoSentToDentistRequest $request)
    {
        $input = $request->all();

        $infoSentToDentist = $this->infoSentToDentistRepository->create($input);

        if ($request->ajax()) {
            $data = [
                'id'   => $infoSentToDentist->id,
                'name' => $infoSentToDentist->name,
            ];

            return response()->json($data);
        }

        Flash::success('Info Sent To Dentist saved successfully.');

        return redirect(route('info-sent-to-dentists.index'));
    }

    /**
     * Display the specified InfoSentToDentist.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $infoSentToDentist = $this->infoSentToDentistRepository->findWithoutFail($id);

        if (empty($infoSentToDentist)) {
            Flash::error('Info Sent To Dentist not found');

            return redirect(route('info-sent-to-dentists.index'));
        }

        return view('admin.info_sent_to_dentists.show', compact('infoSentToDentist'));
    }

    /**
     * Show the form for editing the specified InfoSentToDentist.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $infoSentToDentist = $this->infoSentToDentistRepository->findWithoutFail($id);
        $dentists = $this->dentistRepository->all()->pluck('name', 'id');

        if (empty($infoSentToDentist)) {
            Flash::error('Info Sent To Dentist not found');

            return redirect(route('info-sent-to-dentists.index'));
        }

        return view('admin.info_sent_to_dentists.edit', compact(
            'infoSentToDentist',
            'dentists'));
    }

    /**
     * Update the specified InfoSentToDentist in storage.
     *
     * @param  int              $id
     * @param UpdateInfoSentToDentistRequest $request
     *
     * @return Response
     */
    public function update($id, InfoSentToDentistRequest $request)
    {
        $infoSentToDentist = $this->infoSentToDentistRepository->findWithoutFail($id);

        if (empty($infoSentToDentist)) {
            Flash::error('Info Sent To Dentist not found');

            return redirect(route('info-sent-to-dentists.index'));
        }

        $infoSentToDentist = $this->infoSentToDentistRepository->update($request->all(), $id);

        Flash::success('Info Sent To Dentist updated successfully.');

        return redirect(route('info-sent-to-dentists.index'));
    }

    /**
     * Remove the specified InfoSentToDentist from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $infoSentToDentist = $this->infoSentToDentistRepository->findWithoutFail($id);

        if (empty($infoSentToDentist)) {
            Flash::error('Info Sent To Dentist not found');

            return redirect(route('info-sent-to-dentists.index'));
        }

        $this->infoSentToDentistRepository->delete($id);

        Flash::success('Info Sent To Dentist deleted successfully.');

        return redirect(route('info-sent-to-dentists.index'));
    }
}
