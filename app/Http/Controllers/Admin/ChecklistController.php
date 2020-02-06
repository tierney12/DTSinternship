<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ChecklistRequest;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Repositories\ChecklistRepository;

class ChecklistController extends AppBaseController
{
    /** @var  ChecklistRepository */

    private $checklistRepository;

    public function __construct(ChecklistRepository $checklistRepo)
    {
        $this->checklistRepository = $checklistRepo;
    }

    /**
     * Display a listing of the Checklist.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->checklistRepository->pushCriteria(new RequestCriteria($request));
        $checklists = $this->checklistRepository->all();

        return view('admin.checklists.index', compact('checklists'));
    }

    /**
     * Show the form for creating a new Checklist.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        
        if ($request->ajax()) {
            return view('admin.checklists.form');
        }

        return view('admin.checklists.create');
    }

    /**
     * Store a newly created Checklist in storage.
     *
     * @param CreateChecklistRequest $request
     *
     * @return Response
     */
    public function store(ChecklistRequest $request)
    {
        $input = $request->all();

        $checklist = $this->checklistRepository->create($input);

        if ($request->ajax()) {
            $data = [
                'id'   => $checklist->id,
                'name' => $checklist->name,
            ];

            return response()->json($data);
        }

        Flash::success('Checklist saved successfully.');

        return redirect(route('checklists.index'));
    }

    /**
     * Display the specified Checklist.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $checklist = $this->checklistRepository->findWithoutFail($id);

        if (empty($checklist)) {
            Flash::error('Checklist not found');

            return redirect(route('checklists.index'));
        }

        return view('admin.checklists.show', compact('checklist'));
    }

    /**
     * Show the form for editing the specified Checklist.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $checklist = $this->checklistRepository->findWithoutFail($id);
        
        if (empty($checklist)) {
            Flash::error('Checklist not found');

            return redirect(route('checklists.index'));
        }

        return view('admin.checklists.edit', compact(
            'checklist'));
    }

    /**
     * Update the specified Checklist in storage.
     *
     * @param  int              $id
     * @param UpdateChecklistRequest $request
     *
     * @return Response
     */
    public function update($id, ChecklistRequest $request)
    {
        $checklist = $this->checklistRepository->findWithoutFail($id);

        if (empty($checklist)) {
            Flash::error('Checklist not found');

            return redirect(route('checklists.index'));
        }

        $checklist = $this->checklistRepository->update($request->all(), $id);

        Flash::success('Checklist updated successfully.');

        return redirect(route('checklists.index'));
    }

    /**
     * Remove the specified Checklist from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $checklist = $this->checklistRepository->findWithoutFail($id);

        if (empty($checklist)) {
            Flash::error('Checklist not found');

            return redirect(route('checklists.index'));
        }

        $this->checklistRepository->delete($id);

        Flash::success('Checklist deleted successfully.');

        return redirect(route('checklists.index'));
    }
}
