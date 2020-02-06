<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PopupRequest;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Repositories\PopupRepository;
use App\Repositories\DentistRepository;

class PopupController extends AppBaseController
{
    /** @var  PopupRepository */

    private $popupRepository;
    private $dentistRepository;

    public function __construct(PopupRepository $popupRepo, DentistRepository $dentistRepo)
    {
        $this->popupRepository = $popupRepo;
        $this->dentistRepository = $dentistRepo;
    }

    /**
     * Display a listing of the Popup.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->popupRepository->pushCriteria(new RequestCriteria($request));
        $popups = $this->popupRepository->all();

        return view('admin.popups.index', compact('popups'));
    }

    /**
     * Show the form for creating a new Popup.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        $dentists = $this->dentistRepository->all()->pluck('name', 'id');

        if ($request->ajax()) {
            return view('admin.popups.form');
        }

        return view('admin.popups.create', compact(
            'dentists'));
    }

    /**
     * Store a newly created Popup in storage.
     *
     * @param CreatePopupRequest $request
     *
     * @return Response
     */
    public function store(PopupRequest $request)
    {
        $input = $request->all();

        $popup = $this->popupRepository->create($input);

        if ($request->ajax()) {
            $data = [
                'id'   => $popup->id,
                'name' => $popup->name,
            ];

            return response()->json($data);
        }

        Flash::success('Popup saved successfully.');

        return redirect(route('popups.index'));
    }

    /**
     * Display the specified Popup.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $popup = $this->popupRepository->findWithoutFail($id);

        if (empty($popup)) {
            Flash::error('Popup not found');

            return redirect(route('popups.index'));
        }

        return view('admin.popups.show', compact('popup'));
    }

    /**
     * Show the form for editing the specified Popup.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $popup = $this->popupRepository->findWithoutFail($id);
        $dentists = $this->dentistRepository->all()->pluck('name', 'id');

        if (empty($popup)) {
            Flash::error('Popup not found');

            return redirect(route('popups.index'));
        }

        return view('admin.popups.edit', compact(
            'popup',
            'dentists'));
    }

    /**
     * Update the specified Popup in storage.
     *
     * @param  int              $id
     * @param UpdatePopupRequest $request
     *
     * @return Response
     */
    public function update($id, PopupRequest $request)
    {
        $popup = $this->popupRepository->findWithoutFail($id);

        if (empty($popup)) {
            Flash::error('Popup not found');

            return redirect(route('popups.index'));
        }

        $popup = $this->popupRepository->update($request->all(), $id);

        Flash::success('Popup updated successfully.');

        return redirect(route('popups.index'));
    }

    /**
     * Remove the specified Popup from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $popup = $this->popupRepository->findWithoutFail($id);

        if (empty($popup)) {
            Flash::error('Popup not found');

            return redirect(route('popups.index'));
        }

        $this->popupRepository->delete($id);

        Flash::success('Popup deleted successfully.');

        return redirect(route('popups.index'));
    }
}
