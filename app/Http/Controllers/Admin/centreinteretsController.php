<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreatecentreinteretsRequest;
use App\Http\Requests\Admin\UpdatecentreinteretsRequest;
use App\Repositories\Admin\centreinteretsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Admin\centreinterets;
use Auth;

class centreinteretsController extends AppBaseController
{
    /** @var  centreinteretsRepository */
    private $centreinteretsRepository;

    public function __construct(centreinteretsRepository $centreinteretsRepo)
    {
        $this->centreinteretsRepository = $centreinteretsRepo;
    }

    /**
     * Display a listing of the centreinterets.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
       
       $id=Auth::user()->id;
        $centreinterets = centreinterets::where('id_clt',$id)->get();
        return view('admin.centreinterets.index')
            ->with('centreinterets', $centreinterets);
        
    }

    /**
     * Show the form for creating a new centreinterets.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.centreinterets.create');
    }

    /**
     * Store a newly created centreinterets in storage.
     *
     * @param CreatecentreinteretsRequest $request
     *
     * @return Response
     */
    public function store(CreatecentreinteretsRequest $request)
    {
        $input = $request->all();

        $centreinterets = $this->centreinteretsRepository->create($input);

        Flash::success('Centreinterets saved successfully.');

        return redirect(route('admin.centreinterets.index'));
    }

    /**
     * Display the specified centreinterets.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $centreinterets = $this->centreinteretsRepository->findWithoutFail($id);

        if (empty($centreinterets)) {
            Flash::error('Centreinterets not found');

            return redirect(route('admin.centreinterets.index'));
        }

        return view('admin.centreinterets.show')->with('centreinterets', $centreinterets);
    }

    /**
     * Show the form for editing the specified centreinterets.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $centreinterets = $this->centreinteretsRepository->findWithoutFail($id);

        if (empty($centreinterets)) {
            Flash::error('Centreinterets not found');

            return redirect(route('admin.centreinterets.index'));
        }

        return view('admin.centreinterets.edit')->with('centreinterets', $centreinterets);
    }

    /**
     * Update the specified centreinterets in storage.
     *
     * @param  int              $id
     * @param UpdatecentreinteretsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecentreinteretsRequest $request)
    {
        $centreinterets = $this->centreinteretsRepository->findWithoutFail($id);

        if (empty($centreinterets)) {
            Flash::error('Centreinterets not found');

            return redirect(route('admin.centreinterets.index'));
        }

        $centreinterets = $this->centreinteretsRepository->update($request->all(), $id);

        Flash::success('Centreinterets updated successfully.');

        return redirect(route('admin.centreinterets.index'));
    }

    /**
     * Remove the specified centreinterets from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $centreinterets = $this->centreinteretsRepository->findWithoutFail($id);

        if (empty($centreinterets)) {
            Flash::error('Centreinterets not found');

            return redirect(route('admin.centreinterets.index'));
        }

        $this->centreinteretsRepository->delete($id);

        Flash::success('Centreinterets deleted successfully.');

        return redirect(route('admin.centreinterets.index'));
    }
}
