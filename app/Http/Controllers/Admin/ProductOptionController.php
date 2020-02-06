<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProductOptionRequest;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Repositories\ProductOptionRepository;

class ProductOptionController extends AppBaseController
{
    /** @var  ProductOptionRepository */

    private $productOptionRepository;

    public function __construct(ProductOptionRepository $productOptionRepo)
    {
        $this->productOptionRepository = $productOptionRepo;
    }

    /**
     * Display a listing of the ProductOption.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->productOptionRepository->pushCriteria(new RequestCriteria($request));
        $productOptions = $this->productOptionRepository->all();

        return view('admin.product_option.index', compact('productOptions'));
    }

    /**
     * Show the form for creating a new ProductOption.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        
        if ($request->ajax()) {
            return view('admin.product_option.form');
        }

        return view('admin.product_option.create');
    }

    /**
     * Store a newly created ProductOption in storage.
     *
     * @param CreateProductOptionRequest $request
     *
     * @return Response
     */
    public function store(ProductOptionRequest $request)
    {
        $input = $request->all();

        $productOption = $this->productOptionRepository->create($input);

        if ($request->ajax()) {
            $data = [
                'id'   => $productOption->id,
                'name' => $productOption->name,
            ];

            return response()->json($data);
        }

        Flash::success('Product Option saved successfully.');

        return redirect(route('product-options.index'));
    }

    /**
     * Display the specified ProductOption.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $productOption = $this->productOptionRepository->findWithoutFail($id);

        if (empty($productOption)) {
            Flash::error('Product Option not found');

            return redirect(route('product-options.index'));
        }

        return view('admin.product_option.show', compact('productOption'));
    }

    /**
     * Show the form for editing the specified ProductOption.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $productOption = $this->productOptionRepository->findWithoutFail($id);
        
        if (empty($productOption)) {
            Flash::error('Product Option not found');

            return redirect(route('product-options.index'));
        }

        return view('admin.product_option.edit', compact(
            'productOption'));
    }

    /**
     * Update the specified ProductOption in storage.
     *
     * @param  int              $id
     * @param UpdateProductOptionRequest $request
     *
     * @return Response
     */
    public function update($id, ProductOptionRequest $request)
    {
        $productOption = $this->productOptionRepository->findWithoutFail($id);

        if (empty($productOption)) {
            Flash::error('Product Option not found');

            return redirect(route('product-options.index'));
        }

        $productOption = $this->productOptionRepository->update($request->all(), $id);

        Flash::success('Product Option updated successfully.');

        return redirect(route('product-options.index'));
    }

    /**
     * Remove the specified ProductOption from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $productOption = $this->productOptionRepository->findWithoutFail($id);

        if (empty($productOption)) {
            Flash::error('Product Option not found');

            return redirect(route('product-options.index'));
        }

        $this->productOptionRepository->delete($id);

        Flash::success('Product Option deleted successfully.');

        return redirect(route('product-options.index'));
    }
}
