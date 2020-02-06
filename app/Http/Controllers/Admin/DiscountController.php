<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\DiscountRequest;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Repositories\DiscountRepository;

class DiscountController extends AppBaseController
{
    /** @var  DiscountRepository */

    private $discountRepository;

    public function __construct(DiscountRepository $discountRepo)
    {
        $this->discountRepository = $discountRepo;
    }

    /**
     * Display a listing of the Discount.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->discountRepository->pushCriteria(new RequestCriteria($request));
        $discounts = $this->discountRepository->all();

        return view('admin.discounts.index', compact('discounts'));
    }

    /**
     * Show the form for creating a new Discount.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        
        if ($request->ajax()) {
            return view('admin.discounts.form');
        }

        return view('admin.discounts.create');
    }

    /**
     * Store a newly created Discount in storage.
     *
     * @param CreateDiscountRequest $request
     *
     * @return Response
     */
    public function store(DiscountRequest $request)
    {
        $input = $request->all();

        $discount = $this->discountRepository->create($input);

        if ($request->ajax()) {
            $data = [
                'id'   => $discount->id,
                'name' => $discount->name,
            ];

            return response()->json($data);
        }

        Flash::success('Discount saved successfully.');

        return redirect(route('discounts.index'));
    }

    /**
     * Display the specified Discount.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $discount = $this->discountRepository->findWithoutFail($id);

        if (empty($discount)) {
            Flash::error('Discount not found');

            return redirect(route('discounts.index'));
        }

        return view('admin.discounts.show', compact('discount'));
    }

    /**
     * Show the form for editing the specified Discount.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $discount = $this->discountRepository->findWithoutFail($id);
        
        if (empty($discount)) {
            Flash::error('Discount not found');

            return redirect(route('discounts.index'));
        }

        return view('admin.discounts.edit', compact(
            'discount'));
    }

    /**
     * Update the specified Discount in storage.
     *
     * @param  int              $id
     * @param UpdateDiscountRequest $request
     *
     * @return Response
     */
    public function update($id, DiscountRequest $request)
    {
        $discount = $this->discountRepository->findWithoutFail($id);

        if (empty($discount)) {
            Flash::error('Discount not found');

            return redirect(route('discounts.index'));
        }

        $discount = $this->discountRepository->update($request->all(), $id);

        Flash::success('Discount updated successfully.');

        return redirect(route('discounts.index'));
    }

    /**
     * Remove the specified Discount from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $discount = $this->discountRepository->findWithoutFail($id);

        if (empty($discount)) {
            Flash::error('Discount not found');

            return redirect(route('discounts.index'));
        }

        $this->discountRepository->delete($id);

        Flash::success('Discount deleted successfully.');

        return redirect(route('discounts.index'));
    }
}
