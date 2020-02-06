<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PricebandRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\StockPricebandRepository;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Repositories\PricebandRepository;

class ExceptionController extends AppBaseController
{
    /** @var  PricebandRepository */

    private $pricebandRepository;
    private $stockPricebandRepository;

    public function __construct(PricebandRepository $pricebandRepo, StockPricebandRepository $stockRepo)
    {
        $this->pricebandRepository = $pricebandRepo;
        $this->stockPricebandRepository = $stockRepo;
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
        $exceptions = $this->pricebandRepository->findWhereIn('exception', [1]);


        return view('admin.exceptions.index', compact('exceptions'));
    }

    /**
     * Show the form for creating a new Priceband.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        
        if ($request->ajax()) {
            return view('admin.exceptions.form');
        }

        $stocks = $this->stockPricebandRepository->all();

        return view('admin.exceptions.create', compact('stocks'));
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

        return redirect(route('exceptions.index'));
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

            return redirect(route('exceptions.index'));
        }

        return view('admin.exceptions.show', compact('priceband'));
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

            return redirect(route('exceptions.index'));
        }

        return view('admin.exceptions.edit', compact(
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

            return redirect(route('exceptions.index'));
        }

        $priceband = $this->pricebandRepository->update($request->all(), $id);

        Flash::success('Exception updated successfully.');

        return redirect(route('exceptions.index'));
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

            return redirect(route('exceptions.index'));
        }

        $this->pricebandRepository->delete($id);

        Flash::success('Exception deleted successfully.');

        return redirect(route('exceptions.index'));
    }
}
