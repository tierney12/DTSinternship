<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AssetRequest;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Repositories\AssetRepository;
use App\Repositories\AssetTypeRepository;

class AssetController extends AppBaseController
{
    /** @var  AssetRepository */

    private $assetRepository;
    private $assetTypeRepository;

    public function __construct(AssetRepository $assetRepo, AssetTypeRepository $assetTypeRepo)
    {
        $this->assetRepository = $assetRepo;
        $this->assetTypeRepository = $assetTypeRepo;
    }

    /**
     * Display a listing of the Asset.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->assetRepository->pushCriteria(new RequestCriteria($request));
        $assets = $this->assetRepository->all();

        return view('admin.assets.index', compact('assets'));
    }

    /**
     * Show the form for creating a new Asset.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        $assetTypes = $this->assetTypeRepository->all()->pluck('name', 'id');

        if ($request->ajax()) {
            return view('admin.assets.form');
        }

        return view('admin.assets.create', compact(
            'assetTypes'));
    }

    /**
     * Store a newly created Asset in storage.
     *
     * @param CreateAssetRequest $request
     *
     * @return Response
     */
    public function store(AssetRequest $request)
    {
        $input = $request->all();

        $asset = $this->assetRepository->create($input);

        if ($request->ajax()) {
            $data = [
                'id'   => $asset->id,
                'name' => $asset->name,
            ];

            return response()->json($data);
        }

        Flash::success('Asset saved successfully.');

        return redirect(route('assets.index'));
    }

    /**
     * Display the specified Asset.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $asset = $this->assetRepository->findWithoutFail($id);

        if (empty($asset)) {
            Flash::error('Asset not found');

            return redirect(route('assets.index'));
        }

        return view('admin.assets.show', compact('asset'));
    }

    /**
     * Show the form for editing the specified Asset.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $asset = $this->assetRepository->findWithoutFail($id);
        $assetTypes = $this->assetTypeRepository->all()->pluck('name', 'id');

        if (empty($asset)) {
            Flash::error('Asset not found');

            return redirect(route('assets.index'));
        }

        return view('admin.assets.edit', compact(
            'asset',
            'assetTypes'));
    }

    /**
     * Update the specified Asset in storage.
     *
     * @param  int              $id
     * @param UpdateAssetRequest $request
     *
     * @return Response
     */
    public function update($id, AssetRequest $request)
    {
        $asset = $this->assetRepository->findWithoutFail($id);

        if (empty($asset)) {
            Flash::error('Asset not found');

            return redirect(route('assets.index'));
        }

        $asset = $this->assetRepository->update($request->all(), $id);

        Flash::success('Asset updated successfully.');

        return redirect(route('assets.index'));
    }

    /**
     * Remove the specified Asset from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $asset = $this->assetRepository->findWithoutFail($id);

        if (empty($asset)) {
            Flash::error('Asset not found');

            return redirect(route('assets.index'));
        }

        $this->assetRepository->delete($id);

        Flash::success('Asset deleted successfully.');

        return redirect(route('assets.index'));
    }
}
