<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\RemakeReasonRequest;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Repositories\RemakeReasonRepository;

class RemakeReasonController extends AppBaseController
{
    /** @var  RemakeReasonRepository */

    private $remakeReasonRepository;

    public function __construct(RemakeReasonRepository $remakeReasonRepo)
    {
        $this->remakeReasonRepository = $remakeReasonRepo;
    }

    /**
     * Display a listing of the RemakeReason.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->remakeReasonRepository->pushCriteria(new RequestCriteria($request));
        $remakeReasons = $this->remakeReasonRepository->all();

        return view('admin.remake_reasons.index', compact('remakeReasons'));
    }

    /**
     * Show the form for creating a new RemakeReason.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        
        if ($request->ajax()) {
            return view('admin.remake_reasons.form');
        }

        return view('admin.remake_reasons.create');
    }

    /**
     * Store a newly created RemakeReason in storage.
     *
     * @param CreateRemakeReasonRequest $request
     *
     * @return Response
     */
    public function store(RemakeReasonRequest $request)
    {
        $input = $request->all();

        $remakeReason = $this->remakeReasonRepository->create($input);

        if ($request->ajax()) {
            $data = [
                'id'   => $remakeReason->id,
                'name' => $remakeReason->name,
            ];

            return response()->json($data);
        }

        Flash::success('Remake Reason saved successfully.');

        return redirect(route('remake-reasons.index'));
    }

    /**
     * Display the specified RemakeReason.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $remakeReason = $this->remakeReasonRepository->findWithoutFail($id);

        if (empty($remakeReason)) {
            Flash::error('Remake Reason not found');

            return redirect(route('remake-reasons.index'));
        }

        return view('admin.remake_reasons.show', compact('remakeReason'));
    }

    /**
     * Show the form for editing the specified RemakeReason.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $remakeReason = $this->remakeReasonRepository->findWithoutFail($id);
        
        if (empty($remakeReason)) {
            Flash::error('Remake Reason not found');

            return redirect(route('remake-reasons.index'));
        }

        return view('admin.remake_reasons.edit', compact(
            'remakeReason'));
    }

    /**
     * Update the specified RemakeReason in storage.
     *
     * @param  int              $id
     * @param UpdateRemakeReasonRequest $request
     *
     * @return Response
     */
    public function update($id, RemakeReasonRequest $request)
    {
        $remakeReason = $this->remakeReasonRepository->findWithoutFail($id);

        if (empty($remakeReason)) {
            Flash::error('Remake Reason not found');

            return redirect(route('remake-reasons.index'));
        }

        $remakeReason = $this->remakeReasonRepository->update($request->all(), $id);

        Flash::success('Remake Reason updated successfully.');

        return redirect(route('remake-reasons.index'));
    }

    /**
     * Remove the specified RemakeReason from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $remakeReason = $this->remakeReasonRepository->findWithoutFail($id);

        if (empty($remakeReason)) {
            Flash::error('Remake Reason not found');

            return redirect(route('remake-reasons.index'));
        }

        $this->remakeReasonRepository->delete($id);

        Flash::success('Remake Reason deleted successfully.');

        return redirect(route('remake-reasons.index'));
    }
}
