<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\NoteTypeRequest;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Repositories\NoteTypeRepository;

class NoteTypeController extends AppBaseController
{
    /** @var  NoteTypeRepository */

    private $noteTypeRepository;

    public function __construct(NoteTypeRepository $noteTypeRepo)
    {
        $this->noteTypeRepository = $noteTypeRepo;
    }

    /**
     * Display a listing of the NoteType.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->noteTypeRepository->pushCriteria(new RequestCriteria($request));
        $noteTypes = $this->noteTypeRepository->all();

        return view('admin.note_types.index', compact('noteTypes'));
    }

    /**
     * Show the form for creating a new NoteType.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        
        if ($request->ajax()) {
            return view('admin.note_types.form');
        }

        return view('admin.note_types.create');
    }

    /**
     * Store a newly created NoteType in storage.
     *
     * @param CreateNoteTypeRequest $request
     *
     * @return Response
     */
    public function store(NoteTypeRequest $request)
    {
        $input = $request->all();

        $noteType = $this->noteTypeRepository->create($input);

        if ($request->ajax()) {
            $data = [
                'id'   => $noteType->id,
                'name' => $noteType->name,
            ];

            return response()->json($data);
        }

        Flash::success('Note Type saved successfully.');

        return redirect(route('note-types.index'));
    }

    /**
     * Display the specified NoteType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $noteType = $this->noteTypeRepository->findWithoutFail($id);

        if (empty($noteType)) {
            Flash::error('Note Type not found');

            return redirect(route('note-types.index'));
        }

        return view('admin.note_types.show', compact('noteType'));
    }

    /**
     * Show the form for editing the specified NoteType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $noteType = $this->noteTypeRepository->findWithoutFail($id);
        
        if (empty($noteType)) {
            Flash::error('Note Type not found');

            return redirect(route('note-types.index'));
        }

        return view('admin.note_types.edit', compact(
            'noteType'));
    }

    /**
     * Update the specified NoteType in storage.
     *
     * @param  int              $id
     * @param UpdateNoteTypeRequest $request
     *
     * @return Response
     */
    public function update($id, NoteTypeRequest $request)
    {
        $noteType = $this->noteTypeRepository->findWithoutFail($id);

        if (empty($noteType)) {
            Flash::error('Note Type not found');

            return redirect(route('note-types.index'));
        }

        $noteType = $this->noteTypeRepository->update($request->all(), $id);

        Flash::success('Note Type updated successfully.');

        return redirect(route('note-types.index'));
    }

    /**
     * Remove the specified NoteType from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $noteType = $this->noteTypeRepository->findWithoutFail($id);

        if (empty($noteType)) {
            Flash::error('Note Type not found');

            return redirect(route('note-types.index'));
        }

        $this->noteTypeRepository->delete($id);

        Flash::success('Note Type deleted successfully.');

        return redirect(route('note-types.index'));
    }
}
