<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreatecompetencesRequest;
use App\Http\Requests\Admin\UpdatecompetencesRequest;
use App\Repositories\Admin\competencesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use auth;
use App\Models\Admin\competences;

class competencesController extends AppBaseController
{
    /** @var  competencesRepository */
    private $competencesRepository;

    public function __construct(competencesRepository $competencesRepo)
    {
        $this->competencesRepository = $competencesRepo;
    }

    /**
     * Display a listing of the competences.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
            $id=Auth::user()->id;
        $competences = competences::where('id_clt',$id)->get();
        return view('admin.competences.index')
            ->with('competences', $competences);
    }

    /**
     * Show the form for creating a new competences.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.competences.create');
    }

    /**
     * Store a newly created competences in storage.
     *
     * @param CreatecompetencesRequest $request
     *
     * @return Response
     */
    public function store(CreatecompetencesRequest $request)
    {
        $input = $request->all();

        $competences = $this->competencesRepository->create($input);

        Flash::success('Competences saved successfully.');

        return redirect(route('admin.competences.index'));
    }

    /**
     * Display the specified competences.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $competences = $this->competencesRepository->findWithoutFail($id);

        if (empty($competences)) {
            Flash::error('Competences not found');

            return redirect(route('admin.competences.index'));
        }

        return view('admin.competences.show')->with('competences', $competences);
    }

    /**
     * Show the form for editing the specified competences.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $competences = $this->competencesRepository->findWithoutFail($id);

        if (empty($competences)) {
            Flash::error('Competences not found');

            return redirect(route('admin.competences.index'));
        }

        return view('admin.competences.edit')->with('competences', $competences);
    }

    /**
     * Update the specified competences in storage.
     *
     * @param  int              $id
     * @param UpdatecompetencesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecompetencesRequest $request)
    {
        $competences = $this->competencesRepository->findWithoutFail($id);

        if (empty($competences)) {
            Flash::error('Competences not found');

            return redirect(route('admin.competences.index'));
        }

        $competences = $this->competencesRepository->update($request->all(), $id);

        Flash::success('Competences updated successfully.');

        return redirect(route('admin.competences.index'));
    }

    /**
     * Remove the specified competences from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $competences = $this->competencesRepository->findWithoutFail($id);

        if (empty($competences)) {
            Flash::error('Competences not found');

            return redirect(route('admin.competences.index'));
        }

        $this->competencesRepository->delete($id);

        Flash::success('Competences deleted successfully.');

        return redirect(route('admin.competences.index'));
    }
}
