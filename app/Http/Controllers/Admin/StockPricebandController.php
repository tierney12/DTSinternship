<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StockPricebandRequest;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Repositories\StockPricebandRepository;
use App\Repositories\StockRepository;
use App\Repositories\PricebandRepository;

class StockPricebandController extends AppBaseController
{
    /** @var  StockPricebandRepository */

    private $stockPricebandRepository;
    private $stockRepository;
    private $pricebandRepository;

    public function __construct(StockPricebandRepository $stockPricebandRepo, StockRepository $stockRepo, PricebandRepository $pricebandRepo)
    {
        $this->stockPricebandRepository = $stockPricebandRepo;
        $this->stockRepository = $stockRepo;
        $this->pricebandRepository = $pricebandRepo;
    }

    /**
     * Display a listing of the StockPriceband.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->stockPricebandRepository->pushCriteria(new RequestCriteria($request));
        $stockPricebands = $this->stockPricebandRepository->all();

        return view('admin.stock_pricebands.index', compact('stockPricebands'));
    }

    /**
     * Show the form for creating a new StockPriceband.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        $stocks = $this->stockRepository->all()->pluck('name', 'id');
        $pricebands = $this->pricebandRepository->all()->pluck('name', 'id');

        if ($request->ajax()) {
            return view('admin.stock_pricebands.form');
        }

        return view('admin.stock_pricebands.create', compact(
            'stocks',
            'pricebands'));
    }

    /**
     * Store a newly created StockPriceband in storage.
     *
     * @param CreateStockPricebandRequest $request
     *
     * @return Response
     */
    public function store(StockPricebandRequest $request)
    {
        $input = $request->all();

        $stockPriceband = $this->stockPricebandRepository->create($input);

        if ($request->ajax()) {
            $data = [
                'id'   => $stockPriceband->id,
                'name' => $stockPriceband->name,
            ];

            return response()->json($data);
        }

        Flash::success('Stock Priceband saved successfully.');

        return redirect(route('stock-pricebands.index'));
    }

    /**
     * Display the specified StockPriceband.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $stockPriceband = $this->stockPricebandRepository->findWithoutFail($id);

        if (empty($stockPriceband)) {
            Flash::error('Stock Priceband not found');

            return redirect(route('stock-pricebands.index'));
        }

        return view('admin.stock_pricebands.show', compact('stockPriceband'));
    }

    /**
     * Show the form for editing the specified StockPriceband.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $stockPriceband = $this->stockPricebandRepository->findWithoutFail($id);
        $stocks = $this->stockRepository->all()->pluck('name', 'id');
        $pricebands = $this->pricebandRepository->all()->pluck('name', 'id');

        if (empty($stockPriceband)) {
            Flash::error('Stock Priceband not found');

            return redirect(route('stock-pricebands.index'));
        }

        return view('admin.stock_pricebands.edit', compact(
            'stockPriceband',
            'stocks',
            'pricebands'));
    }

    /**
     * Update the specified StockPriceband in storage.
     *
     * @param  int              $id
     * @param UpdateStockPricebandRequest $request
     *
     * @return Response
     */
    public function update($id, StockPricebandRequest $request)
    {
        $stockPriceband = $this->stockPricebandRepository->findWithoutFail($id);

        if (empty($stockPriceband)) {
            Flash::error('Stock Priceband not found');

            return redirect(route('stock-pricebands.index'));
        }

        $stockPriceband = $this->stockPricebandRepository->update($request->all(), $id);

        Flash::success('Stock Priceband updated successfully.');

        return redirect(route('stock-pricebands.index'));
    }

    /**
     * Remove the specified StockPriceband from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $stockPriceband = $this->stockPricebandRepository->findWithoutFail($id);

        if (empty($stockPriceband)) {
            Flash::error('Stock Priceband not found');

            return redirect(route('stock-pricebands.index'));
        }

        $this->stockPricebandRepository->delete($id);

        Flash::success('Stock Priceband deleted successfully.');

        return redirect(route('stock-pricebands.index'));
    }
}
