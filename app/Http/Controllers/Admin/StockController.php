<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StockPricebandRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Stock;
use App\Repositories\DentistRepository;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Repositories\StockPricebandRepository;
use App\Repositories\PricebandRepository;
use App\Repositories\StockRepository;

class StockController extends AppBaseController
{
    /** @var  StockPricebandRepository */

    private $stockPricebandRepository;
    private $pricebandRepository;
    private $stockRepository;
    private $dentistRepository;

    public function __construct(StockPricebandRepository $stockPricebandRepo, PricebandRepository $pricebandRepo, DentistRepository $dentistRepo)
    {
        $this->stockPricebandRepository = $stockPricebandRepo;
        $this->pricebandRepository = $pricebandRepo;
        $this->dentistRepository = $dentistRepo;
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
        $pricebands = $this->pricebandRepository->all()->pluck('name', 'id');
        $stocks = $this->stockPricebandRepository->all()->pluck('name', 'id');

        if ($request->ajax()) {
            return view('admin.stock_pricebands.form');
        }

        return view('admin.stock_pricebands.create', compact(
            'pricebands',
            'stocks'));
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
        $pricebands = $this->pricebandRepository->all()->pluck('name', 'id');
        $stocks = $this->stockRepository->all()->pluck('name', 'id');

        if (empty($stockPriceband)) {
            Flash::error('Stock Priceband not found');

            return redirect(route('stock-pricebands.index'));
        }

        return view('admin.stock_pricebands.edit', compact(
            'stockPriceband',
            'pricebands',
            'stocks'));
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

    public function retrieve(){

        $stocks = Stock::all();

        return view('admin.jobs.create', compact($stocks));
    }

    public function getPricebandStocks(Request $request){

        $dentist = \App\Models\Dentist::select('id', 'priceband_id', 'exception')->where('id', $request->id)->first();

        if($dentist->exception != null){
            $stocks_exceptions = \App\Models\StockPriceband::all()->where('priceband_id', $dentist->exception);

        }

        $stocks_priceband = \App\Models\StockPriceband::all()->where('priceband_id', $dentist->priceband_id);


        if(isset($stocks_exceptions)){

            foreach($stocks_priceband as $x_key => $x_field){
                foreach($stocks_exceptions as $y_key => $y_field)

                    if($x_field->stock->stock_code == $y_field->stock->stock_code){
                        $stocks_priceband[$x_key] = $stocks_exceptions[$y_key] ;

                        break;
                    }
            }
        }

        foreach($stocks_priceband as $stock){
            $data[] = (['price' => $stock->price, 'id' => $stock->id, 'stock_code' => $stock->stock->stock_code,
                'stock_description' => $stock->stock->stock_description, 'priceband_id' => $stock->priceband_id]);
        }

        return response()->json($data);
    }

    public function findStockDetails(Request $request){

        $stock_priceband = \App\Models\StockPriceband::where('id', $request->id)->first();

//        return response()->json($stock_priceband);

        $data = ['price' => $stock_priceband->price, 'id' => $stock_priceband->id, 'stock_code' => $stock_priceband->stock->stock_code, 'stock_description' => $stock_priceband->stock->stock_description, 'priceband_id' => $stock_priceband->priceband_id];

        return response()->json($data);
    }

    public function addStockRow(Request $request){

        $position = $request['position'];

        $items = $this->stockPricebandRepository->all();

        foreach($items as $item){
            $stocks[] = ['id' => $item->id, 'price' => $item->price, 'stock_code' => $item->stock->stock_code, 'stock_description' => $item->stock->stock_description];
        }

        $view = view('admin.partials.stock-row', compact('position', 'stocks'))->render();

        return response()->json($view);

    }

    public function addExceptionStockRow(Request $request){

        $position = $request['position'];

        $items = $this->stockPricebandRepository->all();

        $stocks = [];

        foreach($items as $item){
            $stocks[] = ['id' => $item->id, 'price' => $item->price, 'stock_code' => $item->stock->stock_code, 'stock_description' => $item->stock->stock_description];
        }

        $view = view('admin.exceptions.partials.exception-row', compact('position', 'stocks'))->render();

        return response()->json($view);

    }
}
