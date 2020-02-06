<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\LabSheetRequest;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Repositories\LabSheetRepository;

class LabSheetController extends AppBaseController
{
    /** @var  LabSheetRepository */

    private $labSheetRepository;

    public function __construct(LabSheetRepository $labSheetRepo)
    {
        $this->labSheetRepository = $labSheetRepo;
    }

    /**
     * Display a listing of the LabSheet.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->labSheetRepository->pushCriteria(new RequestCriteria($request));
        $labSheets = $this->labSheetRepository->all();

        return view('admin.lab_sheets.index', compact('labSheets'));
    }

    /**
     * Show the form for creating a new LabSheet.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        
        if ($request->ajax()) {
            return view('admin.lab_sheets.form');
        }

        return view('admin.lab_sheets.create');
    }

    /**
     * Store a newly created LabSheet in storage.
     *
     * @param CreateLabSheetRequest $request
     *
     * @return Response
     */
    public function store(LabSheetRequest $request)
    {
        $input = $request->all();

        $labSheet = $this->labSheetRepository->create($input);

        if ($request->ajax()) {
            $data = [
                'id'   => $labSheet->id,
                'name' => $labSheet->name,
            ];

            return response()->json($data);
        }

        Flash::success('Lab Sheet saved successfully.');

        return redirect(route('lab-sheets.index'));
    }

    /**
     * Display the specified LabSheet.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $labSheet = $this->labSheetRepository->findWithoutFail($id);

        if (empty($labSheet)) {
            Flash::error('Lab Sheet not found');

            return redirect(route('lab-sheets.index'));
        }

        return view('admin.lab_sheets.show', compact('labSheet'));
    }

    /**
     * Show the form for editing the specified LabSheet.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $labSheet = $this->labSheetRepository->findWithoutFail($id);
        
        if (empty($labSheet)) {
            Flash::error('Lab Sheet not found');

            return redirect(route('lab-sheets.index'));
        }

        return view('admin.lab_sheets.edit', compact(
            'labSheet'));
    }

    /**
     * Update the specified LabSheet in storage.
     *
     * @param  int              $id
     * @param UpdateLabSheetRequest $request
     *
     * @return Response
     */
    public function update($id, LabSheetRequest $request)
    {
        $labSheet = $this->labSheetRepository->findWithoutFail($id);

        if (empty($labSheet)) {
            Flash::error('Lab Sheet not found');

            return redirect(route('lab-sheets.index'));
        }

        $labSheet = $this->labSheetRepository->update($request->all(), $id);

        Flash::success('Lab Sheet updated successfully.');

        return redirect(route('lab-sheets.index'));
    }

    /**
     * Remove the specified LabSheet from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $labSheet = $this->labSheetRepository->findWithoutFail($id);

        if (empty($labSheet)) {
            Flash::error('Lab Sheet not found');

            return redirect(route('lab-sheets.index'));
        }

        $this->labSheetRepository->delete($id);

        Flash::success('Lab Sheet deleted successfully.');

        return redirect(route('lab-sheets.index'));
    }
}
