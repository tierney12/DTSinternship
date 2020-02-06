<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\NominalCodeRequest;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Repositories\NominalCodeRepository;

class NominalCodeController extends AppBaseController
{
    /** @var  NominalCodeRepository */

    private $nominalCodeRepository;

    public function __construct(NominalCodeRepository $nominalCodeRepo)
    {
        $this->nominalCodeRepository = $nominalCodeRepo;
    }

    /**
     * Display a listing of the NominalCode.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->nominalCodeRepository->pushCriteria(new RequestCriteria($request));
        $nominalCodes = $this->nominalCodeRepository->all();

        return view('admin.nominal_codes.index', compact('nominalCodes'));
    }

    /**
     * Show the form for creating a new NominalCode.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        
        if ($request->ajax()) {
            return view('admin.nominal_codes.form');
        }

        return view('admin.nominal_codes.create');
    }

    /**
     * Store a newly created NominalCode in storage.
     *
     * @param CreateNominalCodeRequest $request
     *
     * @return Response
     */
    public function store(NominalCodeRequest $request)
    {
        $input = $request->all();

        $nominalCode = $this->nominalCodeRepository->create($input);

        if ($request->ajax()) {
            $data = [
                'id'   => $nominalCode->id,
                'name' => $nominalCode->name,
            ];

            return response()->json($data);
        }

        Flash::success('Nominal Code saved successfully.');

        return redirect(route('nominal-codes.index'));
    }

    /**
     * Display the specified NominalCode.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $nominalCode = $this->nominalCodeRepository->findWithoutFail($id);

        if (empty($nominalCode)) {
            Flash::error('Nominal Code not found');

            return redirect(route('nominal-codes.index'));
        }

        return view('admin.nominal_codes.show', compact('nominalCode'));
    }

    /**
     * Show the form for editing the specified NominalCode.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $nominalCode = $this->nominalCodeRepository->findWithoutFail($id);
        
        if (empty($nominalCode)) {
            Flash::error('Nominal Code not found');

            return redirect(route('nominal-codes.index'));
        }

        return view('admin.nominal_codes.edit', compact(
            'nominalCode'));
    }

    /**
     * Update the specified NominalCode in storage.
     *
     * @param  int              $id
     * @param UpdateNominalCodeRequest $request
     *
     * @return Response
     */
    public function update($id, NominalCodeRequest $request)
    {
        $nominalCode = $this->nominalCodeRepository->findWithoutFail($id);

        if (empty($nominalCode)) {
            Flash::error('Nominal Code not found');

            return redirect(route('nominal-codes.index'));
        }

        $nominalCode = $this->nominalCodeRepository->update($request->all(), $id);

        Flash::success('Nominal Code updated successfully.');

        return redirect(route('nominal-codes.index'));
    }

    /**
     * Remove the specified NominalCode from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $nominalCode = $this->nominalCodeRepository->findWithoutFail($id);

        if (empty($nominalCode)) {
            Flash::error('Nominal Code not found');

            return redirect(route('nominal-codes.index'));
        }

        $this->nominalCodeRepository->delete($id);

        Flash::success('Nominal Code deleted successfully.');

        return redirect(route('nominal-codes.index'));
    }
}
