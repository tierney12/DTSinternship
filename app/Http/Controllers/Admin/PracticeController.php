<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PracticeRequest;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Repositories\PracticeRepository;

class PracticeController extends AppBaseController
{
    /** @var  PracticeRepository */

    private $practiceRepository;

    public function __construct(PracticeRepository $practiceRepo)
    {
        $this->practiceRepository = $practiceRepo;
    }

    /**
     * Display a listing of the Practice.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->practiceRepository->pushCriteria(new RequestCriteria($request));
        $practices = $this->practiceRepository->all();

        return view('admin.practices.index', compact('practices'));
    }

    /**
     * Show the form for creating a new Practice.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        
        if ($request->ajax()) {
            return view('admin.practices.form');
        }

        return view('admin.practices.create');
    }

    /**
     * Store a newly created Practice in storage.
     *
     * @param CreatePracticeRequest $request
     *
     * @return Response
     */
    public function store(PracticeRequest $request)
    {
        $input = $request->all();

        $practice = $this->practiceRepository->create($input);

        if ($request->ajax()) {
            $data = [
                'id'   => $practice->id,
                'name' => $practice->name,
            ];

            return response()->json($data);
        }

        Flash::success('Practice saved successfully.');

        return redirect(route('practices.index'));
    }

    /**
     * Display the specified Practice.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $practice = $this->practiceRepository->findWithoutFail($id);

        if (empty($practice)) {
            Flash::error('Practice not found');

            return redirect(route('practices.index'));
        }

        return view('admin.practices.show', compact('practice'));
    }

    /**
     * Show the form for editing the specified Practice.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $practice = $this->practiceRepository->findWithoutFail($id);
        
        if (empty($practice)) {
            Flash::error('Practice not found');

            return redirect(route('practices.index'));
        }

        return view('admin.practices.edit', compact(
            'practice'));
    }

    /**
     * Update the specified Practice in storage.
     *
     * @param  int              $id
     * @param UpdatePracticeRequest $request
     *
     * @return Response
     */
    public function update($id, PracticeRequest $request)
    {
        $practice = $this->practiceRepository->findWithoutFail($id);

        if (empty($practice)) {
            Flash::error('Practice not found');

            return redirect(route('practices.index'));
        }

        $practice = $this->practiceRepository->update($request->all(), $id);

        Flash::success('Practice updated successfully.');

        return redirect(route('practices.index'));
    }

    /**
     * Remove the specified Practice from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $practice = $this->practiceRepository->findWithoutFail($id);

        if (empty($practice)) {
            Flash::error('Practice not found');

            return redirect(route('practices.index'));
        }

        $this->practiceRepository->delete($id);

        Flash::success('Practice deleted successfully.');

        return redirect(route('practices.index'));
    }
}
