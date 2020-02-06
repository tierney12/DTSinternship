<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AssetTypeRequest;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Repositories\AssetTypeRepository;

class AssetTypeController extends AppBaseController
{
    /** @var  AssetTypeRepository */

    private $assetTypeRepository;

    public function __construct(AssetTypeRepository $assetTypeRepo)
    {
        $this->assetTypeRepository = $assetTypeRepo;
    }

    /**
     * Display a listing of the AssetType.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->assetTypeRepository->pushCriteria(new RequestCriteria($request));
        $assetTypes = $this->assetTypeRepository->all();

        return view('admin.asset_types.index', compact('assetTypes'));
    }

    /**
     * Show the form for creating a new AssetType.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        
        if ($request->ajax()) {
            return view('admin.asset_types.form');
        }

        return view('admin.asset_types.create');
    }

    /**
     * Store a newly created AssetType in storage.
     *
     * @param CreateAssetTypeRequest $request
     *
     * @return Response
     */
    public function store(AssetTypeRequest $request)
    {
        $input = $request->all();

        $assetType = $this->assetTypeRepository->create($input);

        if ($request->ajax()) {
            $data = [
                'id'   => $assetType->id,
                'name' => $assetType->name,
            ];

            return response()->json($data);
        }

        Flash::success('Asset Type saved successfully.');

        return redirect(route('asset-types.index'));
    }

    /**
     * Display the specified AssetType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $assetType = $this->assetTypeRepository->findWithoutFail($id);

        if (empty($assetType)) {
            Flash::error('Asset Type not found');

            return redirect(route('asset-types.index'));
        }

        return view('admin.asset_types.show', compact('assetType'));
    }

    /**
     * Show the form for editing the specified AssetType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $assetType = $this->assetTypeRepository->findWithoutFail($id);
        
        if (empty($assetType)) {
            Flash::error('Asset Type not found');

            return redirect(route('asset-types.index'));
        }

        return view('admin.asset_types.edit', compact(
            'assetType'));
    }

    /**
     * Update the specified AssetType in storage.
     *
     * @param  int              $id
     * @param UpdateAssetTypeRequest $request
     *
     * @return Response
     */
    public function update($id, AssetTypeRequest $request)
    {
        $assetType = $this->assetTypeRepository->findWithoutFail($id);

        if (empty($assetType)) {
            Flash::error('Asset Type not found');

            return redirect(route('asset-types.index'));
        }

        $assetType = $this->assetTypeRepository->update($request->all(), $id);

        Flash::success('Asset Type updated successfully.');

        return redirect(route('asset-types.index'));
    }

    /**
     * Remove the specified AssetType from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $assetType = $this->assetTypeRepository->findWithoutFail($id);

        if (empty($assetType)) {
            Flash::error('Asset Type not found');

            return redirect(route('asset-types.index'));
        }

        $this->assetTypeRepository->delete($id);

        Flash::success('Asset Type deleted successfully.');

        return redirect(route('asset-types.index'));
    }
}
