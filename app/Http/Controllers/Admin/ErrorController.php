<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ErrorRequest;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Repositories\ErrorRepository;

class ErrorController extends AppBaseController
{
    /** @var  ErrorRepository */

    private $errorRepository;

    public function __construct(ErrorRepository $errorRepo)
    {
        $this->errorRepository = $errorRepo;
    }

    /**
     * Display a listing of the JobError.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->errorRepository->pushCriteria(new RequestCriteria($request));
        $errors = $this->errorRepository->all();

        return view('admin.errors.index', compact('errors'));
    }

    /**
     * Show the form for creating a new JobError.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        
        if ($request->ajax()) {
            return view('admin.errors.form');
        }

        return view('admin.errors.create');
    }

    /**
     * Store a newly created JobError in storage.
     *
     * @param CreateErrorRequest $request
     *
     * @return Response
     */
    public function store(ErrorRequest $request)
    {
        $input = $request->all();

        $error = $this->errorRepository->create($input);

        if ($request->ajax()) {
            $data = [
                'id'   => $error->id,
                'name' => $error->name,
            ];

            return response()->json($data);
        }

        Flash::success('JobError saved successfully.');

        return redirect(route('errors.index'));
    }

    /**
     * Display the specified JobError.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $error = $this->errorRepository->findWithoutFail($id);

        if (empty($error)) {
            Flash::error('JobError not found');

            return redirect(route('errors.index'));
        }

        return view('admin.errors.show', compact('error'));
    }

    /**
     * Show the form for editing the specified JobError.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $error = $this->errorRepository->findWithoutFail($id);
        
        if (empty($error)) {
            Flash::error('JobError not found');

            return redirect(route('errors.index'));
        }

        return view('admin.errors.edit', compact(
            'error'));
    }

    /**
     * Update the specified JobError in storage.
     *
     * @param  int              $id
     * @param UpdateErrorRequest $request
     *
     * @return Response
     */
    public function update($id, ErrorRequest $request)
    {
        $error = $this->errorRepository->findWithoutFail($id);

        if (empty($error)) {
            Flash::error('JobError not found');

            return redirect(route('errors.index'));
        }

        $error = $this->errorRepository->update($request->all(), $id);

        Flash::success('JobError updated successfully.');

        return redirect(route('errors.index'));
    }

    /**
     * Remove the specified JobError from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $error = $this->errorRepository->findWithoutFail($id);

        if (empty($error)) {
            Flash::error('JobError not found');

            return redirect(route('errors.index'));
        }

        $this->errorRepository->delete($id);

        Flash::success('JobError deleted successfully.');

        return redirect(route('errors.index'));
    }
}
