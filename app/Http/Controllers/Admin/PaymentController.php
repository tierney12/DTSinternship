<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PaymentRequest;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Repositories\PaymentRepository;
use App\Repositories\TransactionRepository;
use App\Repositories\PracticeRepository;

class PaymentController extends AppBaseController
{
    /** @var  PaymentRepository */

    private $paymentRepository;
    private $transactionRepository;
    private $practiceRepository;

    public function __construct(PaymentRepository $paymentRepo, TransactionRepository $transactionRepo, PracticeRepository $practiceRepo)
    {
        $this->paymentRepository = $paymentRepo;
        $this->transactionRepository = $transactionRepo;
        $this->practiceRepository = $practiceRepo;
    }

    /**
     * Display a listing of the Payment.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->paymentRepository->pushCriteria(new RequestCriteria($request));
        $payments = $this->paymentRepository->all();

        return view('admin.payments.index', compact('payments'));
    }

    /**
     * Show the form for creating a new Payment.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        $transactions = $this->transactionRepository->all()->pluck('name', 'id');
        $practices = $this->practiceRepository->all()->pluck('name', 'id');

        if ($request->ajax()) {
            return view('admin.payments.form');
        }

        return view('admin.payments.create', compact(
            'transactions',
            'practices'));
    }

    /**
     * Store a newly created Payment in storage.
     *
     * @param CreatePaymentRequest $request
     *
     * @return Response
     */
    public function store(PaymentRequest $request)
    {
        $input = $request->all();

        $payment = $this->paymentRepository->create($input);

        if ($request->ajax()) {
            $data = [
                'id'   => $payment->id,
                'name' => $payment->name,
            ];

            return response()->json($data);
        }

        Flash::success('Payment saved successfully.');

        return redirect(route('payments.index'));
    }

    /**
     * Display the specified Payment.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $payment = $this->paymentRepository->findWithoutFail($id);

        if (empty($payment)) {
            Flash::error('Payment not found');

            return redirect(route('payments.index'));
        }

        return view('admin.payments.show', compact('payment'));
    }

    /**
     * Show the form for editing the specified Payment.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $payment = $this->paymentRepository->findWithoutFail($id);
        $transactions = $this->transactionRepository->all()->pluck('name', 'id');
        $practices = $this->practiceRepository->all()->pluck('name', 'id');

        if (empty($payment)) {
            Flash::error('Payment not found');

            return redirect(route('payments.index'));
        }

        return view('admin.payments.edit', compact(
            'payment',
            'transactions',
            'practices'));
    }

    /**
     * Update the specified Payment in storage.
     *
     * @param  int              $id
     * @param UpdatePaymentRequest $request
     *
     * @return Response
     */
    public function update($id, PaymentRequest $request)
    {
        $payment = $this->paymentRepository->findWithoutFail($id);

        if (empty($payment)) {
            Flash::error('Payment not found');

            return redirect(route('payments.index'));
        }

        $payment = $this->paymentRepository->update($request->all(), $id);

        Flash::success('Payment updated successfully.');

        return redirect(route('payments.index'));
    }

    /**
     * Remove the specified Payment from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $payment = $this->paymentRepository->findWithoutFail($id);

        if (empty($payment)) {
            Flash::error('Payment not found');

            return redirect(route('payments.index'));
        }

        $this->paymentRepository->delete($id);

        Flash::success('Payment deleted successfully.');

        return redirect(route('payments.index'));
    }
}
