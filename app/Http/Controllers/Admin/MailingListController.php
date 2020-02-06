<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\MailingListRequest;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Repositories\MailingListRepository;

class MailingListController extends AppBaseController
{
    /** @var  MailingListRepository */

    private $mailingListRepository;

    public function __construct(MailingListRepository $mailingListRepo)
    {
        $this->mailingListRepository = $mailingListRepo;
    }

    /**
     * Display a listing of the MailingList.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->mailingListRepository->pushCriteria(new RequestCriteria($request));
        $mailingLists = $this->mailingListRepository->all();

        return view('admin.mailing_lists.index', compact('mailingLists'));
    }

    /**
     * Show the form for creating a new MailingList.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        
        if ($request->ajax()) {
            return view('admin.mailing_lists.form');
        }

        return view('admin.mailing_lists.create');
    }

    /**
     * Store a newly created MailingList in storage.
     *
     * @param CreateMailingListRequest $request
     *
     * @return Response
     */
    public function store(MailingListRequest $request)
    {
        $input = $request->all();

        $mailingList = $this->mailingListRepository->create($input);

        if ($request->ajax()) {
            $data = [
                'id'   => $mailingList->id,
                'name' => $mailingList->name,
            ];

            return response()->json($data);
        }

        Flash::success('Mailing List saved successfully.');

        return redirect(route('mailing-lists.index'));
    }

    /**
     * Display the specified MailingList.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mailingList = $this->mailingListRepository->findWithoutFail($id);

        if (empty($mailingList)) {
            Flash::error('Mailing List not found');

            return redirect(route('mailing-lists.index'));
        }

        return view('admin.mailing_lists.show', compact('mailingList'));
    }

    /**
     * Show the form for editing the specified MailingList.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mailingList = $this->mailingListRepository->findWithoutFail($id);
        
        if (empty($mailingList)) {
            Flash::error('Mailing List not found');

            return redirect(route('mailing-lists.index'));
        }

        return view('admin.mailing_lists.edit', compact(
            'mailingList'));
    }

    /**
     * Update the specified MailingList in storage.
     *
     * @param  int              $id
     * @param UpdateMailingListRequest $request
     *
     * @return Response
     */
    public function update($id, MailingListRequest $request)
    {
        $mailingList = $this->mailingListRepository->findWithoutFail($id);

        if (empty($mailingList)) {
            Flash::error('Mailing List not found');

            return redirect(route('mailing-lists.index'));
        }

        $mailingList = $this->mailingListRepository->update($request->all(), $id);

        Flash::success('Mailing List updated successfully.');

        return redirect(route('mailing-lists.index'));
    }

    /**
     * Remove the specified MailingList from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mailingList = $this->mailingListRepository->findWithoutFail($id);

        if (empty($mailingList)) {
            Flash::error('Mailing List not found');

            return redirect(route('mailing-lists.index'));
        }

        $this->mailingListRepository->delete($id);

        Flash::success('Mailing List deleted successfully.');

        return redirect(route('mailing-lists.index'));
    }
}
