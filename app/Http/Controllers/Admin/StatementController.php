<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StatementRequest;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Repositories\StatementRepository;

class StatementController extends AppBaseController
{
    /** @var  StatementRepository */

    private $statementRepository;

    public function __construct(StatementRepository $statementRepo)
    {
        $this->statementRepository = $statementRepo;
    }

    /**
     * Display a listing of the Statement.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->statementRepository->pushCriteria(new RequestCriteria($request));
        $statements = $this->statementRepository->all();

        return view('admin.statements.index', compact('statements'));
    }

    /**
     * Show the form for creating a new Statement.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        
        if ($request->ajax()) {
            return view('admin.statements.form');
        }

        return view('admin.statements.create');
    }

    /**
     * Store a newly created Statement in storage.
     *
     * @param CreateStatementRequest $request
     *
     * @return Response
     */
    public function store(StatementRequest $request)
    {
        $input = $request->all();

        $statement = $this->statementRepository->create($input);

        if ($request->ajax()) {
            $data = [
                'id'   => $statement->id,
                'name' => $statement->name,
            ];

            return response()->json($data);
        }

        Flash::success('Statement saved successfully.');

        return redirect(route('statements.index'));
    }

    /**
     * Display the specified Statement.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $statement = $this->statementRepository->findWithoutFail($id);

        if (empty($statement)) {
            Flash::error('Statement not found');

            return redirect(route('statements.index'));
        }

        return view('admin.statements.show', compact('statement'));
    }

    /**
     * Show the form for editing the specified Statement.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $statement = $this->statementRepository->findWithoutFail($id);
        
        if (empty($statement)) {
            Flash::error('Statement not found');

            return redirect(route('statements.index'));
        }

        return view('admin.statements.edit', compact(
            'statement'));
    }

    /**
     * Update the specified Statement in storage.
     *
     * @param  int              $id
     * @param UpdateStatementRequest $request
     *
     * @return Response
     */
    public function update($id, StatementRequest $request)
    {
        $statement = $this->statementRepository->findWithoutFail($id);

        if (empty($statement)) {
            Flash::error('Statement not found');

            return redirect(route('statements.index'));
        }

        $statement = $this->statementRepository->update($request->all(), $id);

        Flash::success('Statement updated successfully.');

        return redirect(route('statements.index'));
    }

    /**
     * Remove the specified Statement from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $statement = $this->statementRepository->findWithoutFail($id);

        if (empty($statement)) {
            Flash::error('Statement not found');

            return redirect(route('statements.index'));
        }

        $this->statementRepository->delete($id);

        Flash::success('Statement deleted successfully.');

        return redirect(route('statements.index'));
    }
}
