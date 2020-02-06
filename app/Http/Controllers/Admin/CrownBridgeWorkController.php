<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CrownBridgeWorkRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\CrownBridgeWork;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Repositories\CrownBridgeWorkRepository;

class CrownBridgeWorkController extends AppBaseController
{
    /** @var  CrownBridgeWorkRepository */

    private $cb_workRepository;

    public function __construct(CrownBridgeWorkRepository $cb_workRepo)
    {
        $this->crownBridgeWorkRepository = $cb_workRepo;
    }

    /**
     * Display a listing of the CrownBridgeWork.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->crownBridgeWorkRepository->pushCriteria(new RequestCriteria($request));
        $cb_works = $this->crownBridgeWorkRepository->all();

        return view('admin.crown_bridge_works.index', compact('crownBridgeWorks'));
    }

    /**
     * Show the form for creating a new CrownBridgeWork.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        
        if ($request->ajax()) {
            return view('admin.crown_bridge_works.form');
        }

        return view('admin.crown_bridge_works.create');
    }

    /**
     * Store a newly created CrownBridgeWork in storage.
     *
     * @param CreateCrownBridgeWorkRequest $request
     *
     * @return Response
     */
    public function store(CrownBridgeWorkRequest $request)
    {
        $input = $request->all();

        $cb_work = $this->crownBridgeWorkRepository->create($input);

        if ($request->ajax()) {
            $data = [
                'id'   => $cb_work->id,
                'name' => $cb_work->name,
            ];

            return response()->json($data);
        }

        Flash::success('Crown Bridge Work saved successfully.');

        return redirect(route('crown-bridge-works.index'));
    }

    /**
     * Display the specified CrownBridgeWork.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cb_work = $this->crownBridgeWorkRepository->findWithoutFail($id);

        if (empty($cb_work)) {
            Flash::error('Crown Bridge Work not found');

            return redirect(route('crown-bridge-works.index'));
        }

        return view('admin.crown_bridge_works.show', compact('crownBridgeWork'));
    }

    /**
     * Show the form for editing the specified CrownBridgeWork.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cb_work = $this->crownBridgeWorkRepository->findWithoutFail($id);
        
        if (empty($cb_work)) {
            Flash::error('Crown Bridge Work not found');

            return redirect(route('crown-bridge-works.index'));
        }

        return view('admin.crown_bridge_works.edit', compact(
            'crownBridgeWork'));
    }

    /**
     * Update the specified CrownBridgeWork in storage.
     *
     * @param  int              $id
     * @param UpdateCrownBridgeWorkRequest $request
     *
     * @return Response
     */
    public function update($id, CrownBridgeWorkRequest $request)
    {
        $cb_work = $this->crownBridgeWorkRepository->findWithoutFail($id);

        if (empty($cb_work)) {
            Flash::error('Crown Bridge Work not found');

            return redirect(route('crown-bridge-works.index'));
        }

        $cb_work = $this->crownBridgeWorkRepository->update($request->all(), $id);

        Flash::success('Crown Bridge Work updated successfully.');

        return redirect(route('crown-bridge-works.index'));
    }

    /**
     * Remove the specified CrownBridgeWork from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cb_work = $this->crownBridgeWorkRepository->findWithoutFail($id);

        if (empty($cb_work)) {
            Flash::error('Crown Bridge Work not found');

            return redirect(route('crown-bridge-works.index'));
        }

        $this->crownBridgeWorkRepository->delete($id);

        Flash::success('Crown Bridge Work deleted successfully.');

        return redirect(route('crown-bridge-works.index'));
    }

    public function findCBWorkDetails(Request $request){

        $data = CrownBridgeWork::all()->where('id', $request->id)->first();

        return response()->json($data);
    }
}
