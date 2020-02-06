<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PricebandRequest;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Repositories\PricebandRepository;

class PricebandController extends AppBaseController
{
    /** @var  PricebandRepository */

    private $pricebandRepository;

    public function __construct(PricebandRepository $pricebandRepo)
    {
        $this->pricebandRepository = $pricebandRepo;
    }

    /**
     * Display a listing of the Priceband.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->pricebandRepository->pushCriteria(new RequestCriteria($request));

        //send all the pricebands that aren't exceptions
        $pricebands = $this->pricebandRepository->all()->where('exception', 0);

        return view('admin.pricebands.index', compact('pricebands'));
    }

    /**
     * Show the form for creating a new Priceband.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        
        if ($request->ajax()) {
            return view('admin.pricebands.form');
        }

        return view('admin.pricebands.create');
    }

    /**
     * Store a newly created Priceband in storage.
     *
     * @param CreatePricebandRequest $request
     *
     * @return Response
     */
    public function store(PricebandRequest $request)
    {
        $input = $request->all();

        $priceband = $this->pricebandRepository->create($input);

        if ($request->ajax()) {
            $data = [
                'id'   => $priceband->id,
                'name' => $priceband->name,
            ];

            return response()->json($data);
        }

        Flash::success('Priceband saved successfully.');

        return redirect(route('pricebands.index'));
    }

    /**
     * Display the specified Priceband.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $priceband = $this->pricebandRepository->findWithoutFail($id);

        if (empty($priceband)) {
            Flash::error('Priceband not found');

            return redirect(route('pricebands.index'));
        }

        return view('admin.pricebands.show', compact('priceband'));
    }

    /**
     * Show the form for editing the specified Priceband.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $priceband = $this->pricebandRepository->findWithoutFail($id);
        
        if (empty($priceband)) {
            Flash::error('Priceband not found');

            return redirect(route('pricebands.index'));
        }

        return view('admin.pricebands.edit', compact(
            'priceband'));
    }

    /**
     * Update the specified Priceband in storage.
     *
     * @param  int              $id
     * @param UpdatePricebandRequest $request
     *
     * @return Response
     */
    public function update($id, PricebandRequest $request)
    {
        $priceband = $this->pricebandRepository->findWithoutFail($id);

        if (empty($priceband)) {
            Flash::error('Priceband not found');

            return redirect(route('pricebands.index'));
        }

        $priceband = $this->pricebandRepository->update($request->all(), $id);

        Flash::success('Priceband updated successfully.');

        return redirect(route('pricebands.index'));
    }

    /**
     * Remove the specified Priceband from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $priceband = $this->pricebandRepository->findWithoutFail($id);

        if (empty($priceband)) {
            Flash::error('Priceband not found');

            return redirect(route('pricebands.index'));
        }

        $this->pricebandRepository->delete($id);

        Flash::success('Priceband deleted successfully.');

        return redirect(route('pricebands.index'));
    }
}
