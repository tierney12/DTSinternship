<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProsWorkRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\ProsWork;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Repositories\ProsWorkRepository;

class ProsWorkController extends AppBaseController
{
    /** @var  ProsWorkRepository */

    private $prosWorkRepository;

    public function __construct(ProsWorkRepository $prosWorkRepo)
    {
        $this->prosWorkRepository = $prosWorkRepo;
    }

    /**
     * Display a listing of the ProsWork.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->prosWorkRepository->pushCriteria(new RequestCriteria($request));
        $prosWorks = $this->prosWorkRepository->all();

        return view('admin.pros_works.index', compact('prosWorks'));
    }

    /**
     * Show the form for creating a new ProsWork.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        
        if ($request->ajax()) {
            return view('admin.pros_works.form');
        }

        return view('admin.pros_works.create');
    }

    /**
     * Store a newly created ProsWork in storage.
     *
     * @param CreateProsWorkRequest $request
     *
     * @return Response
     */
    public function store(ProsWorkRequest $request)
    {
        $input = $request->all();

        $prosWork = $this->prosWorkRepository->create($input);

        if ($request->ajax()) {
            $data = [
                'id'   => $prosWork->id,
                'name' => $prosWork->name,
            ];

            return response()->json($data);
        }

        Flash::success('Pros Work saved successfully.');

        return redirect(route('pros-works.index'));
    }

    /**
     * Display the specified ProsWork.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $prosWork = $this->prosWorkRepository->findWithoutFail($id);

        if (empty($prosWork)) {
            Flash::error('Pros Work not found');

            return redirect(route('pros-works.index'));
        }

        return view('admin.pros_works.show', compact('prosWork'));
    }

    /**
     * Show the form for editing the specified ProsWork.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $prosWork = $this->prosWorkRepository->findWithoutFail($id);
        
        if (empty($prosWork)) {
            Flash::error('Pros Work not found');

            return redirect(route('pros-works.index'));
        }

        return view('admin.pros_works.edit', compact(
            'prosWork'));
    }

    /**
     * Update the specified ProsWork in storage.
     *
     * @param  int              $id
     * @param UpdateProsWorkRequest $request
     *
     * @return Response
     */
    public function update($id, ProsWorkRequest $request)
    {
        $prosWork = $this->prosWorkRepository->findWithoutFail($id);

        if (empty($prosWork)) {
            Flash::error('Pros Work not found');

            return redirect(route('pros-works.index'));
        }

        $prosWork = $this->prosWorkRepository->update($request->all(), $id);

        Flash::success('Pros Work updated successfully.');

        return redirect(route('pros-works.index'));
    }

    /**
     * Remove the specified ProsWork from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $prosWork = $this->prosWorkRepository->findWithoutFail($id);

        if (empty($prosWork)) {
            Flash::error('Pros Work not found');

            return redirect(route('pros-works.index'));
        }

        $this->prosWorkRepository->delete($id);

        Flash::success('Pros Work deleted successfully.');

        return redirect(route('pros-works.index'));
    }

    public function findProsWorkDetails(Request $request){

        $data = ProsWork::all()->where('id', $request->id)->first();

        return response()->json($data);
    }
}
