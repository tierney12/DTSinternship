<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AreaRequest;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Repositories\AreaRepository;

class AreaController extends AppBaseController
{
    /** @var  AreaRepository */

    private $areaRepository;

    public function __construct(AreaRepository $areaRepo)
    {
        $this->areaRepository = $areaRepo;
    }

    /**
     * Display a listing of the Area.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->areaRepository->pushCriteria(new RequestCriteria($request));
        $areas = $this->areaRepository->all();

        return view('admin.areas.index', compact('areas'));
    }

    /**
     * Show the form for creating a new Area.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        
        if ($request->ajax()) {
            return view('admin.areas.form');
        }

        return view('admin.areas.create');
    }

    /**
     * Store a newly created Area in storage.
     *
     * @param CreateAreaRequest $request
     *
     * @return Response
     */
    public function store(AreaRequest $request)
    {
        $input = $request->all();

        $area = $this->areaRepository->create($input);

        if ($request->ajax()) {
            $data = [
                'id'   => $area->id,
                'name' => $area->name,
            ];

            return response()->json($data);
        }

        Flash::success('Area saved successfully.');

        return redirect(route('areas.index'));
    }

    /**
     * Display the specified Area.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $area = $this->areaRepository->findWithoutFail($id);

        if (empty($area)) {
            Flash::error('Area not found');

            return redirect(route('areas.index'));
        }

        return view('admin.areas.show', compact('area'));
    }

    /**
     * Show the form for editing the specified Area.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $area = $this->areaRepository->findWithoutFail($id);
        
        if (empty($area)) {
            Flash::error('Area not found');

            return redirect(route('areas.index'));
        }

        return view('admin.areas.edit', compact(
            'area'));
    }

    /**
     * Update the specified Area in storage.
     *
     * @param  int              $id
     * @param UpdateAreaRequest $request
     *
     * @return Response
     */
    public function update($id, AreaRequest $request)
    {
        $area = $this->areaRepository->findWithoutFail($id);

        if (empty($area)) {
            Flash::error('Area not found');

            return redirect(route('areas.index'));
        }

        $area = $this->areaRepository->update($request->all(), $id);

        Flash::success('Area updated successfully.');

        return redirect(route('areas.index'));
    }

    /**
     * Remove the specified Area from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $area = $this->areaRepository->findWithoutFail($id);

        if (empty($area)) {
            Flash::error('Area not found');

            return redirect(route('areas.index'));
        }

        $area->delete();

        Flash::success('Area deleted successfully.');

        return redirect(route('areas.index'));
    }
}
