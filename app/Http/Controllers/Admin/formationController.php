<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateformationRequest;
use App\Http\Requests\Admin\UpdateformationRequest;
use App\Repositories\Admin\formationRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use auth;
use App\Models\Admin\formation;
class formationController extends AppBaseController
{
    /** @var  formationRepository */
    private $formationRepository;

    public function __construct(formationRepository $formationRepo)
    {
        $this->formationRepository = $formationRepo;
    }

    /**
     * Display a listing of the formation.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $id=Auth::user()->id;
        $formations = formation::where('id_clt',$id)->get();
        
        return view('admin.formations.index')
            ->with('formations', $formations);
    }

    /**
     * Show the form for creating a new formation.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.formations.create');
    }

    /**
     * Store a newly created formation in storage.
     *
     * @param CreateformationRequest $request
     *
     * @return Response
     */
    public function store(CreateformationRequest $request)
    {
        $input = $request->all();

        $formation = $this->formationRepository->create($input);

        Flash::success('Formation saved successfully.');

        return redirect(route('admin.formations.index'));
    }

    /**
     * Display the specified formation.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $formation = $this->formationRepository->findWithoutFail($id);

        if (empty($formation)) {
            Flash::error('Formation not found');

            return redirect(route('admin.formations.index'));
        }

        return view('admin.formations.show')->with('formation', $formation);
    }

    /**
     * Show the form for editing the specified formation.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $formation = $this->formationRepository->findWithoutFail($id);

        if (empty($formation)) {
            Flash::error('Formation not found');

            return redirect(route('admin.formations.index'));
        }

        return view('admin.formations.edit')->with('formation', $formation);
    }

    /**
     * Update the specified formation in storage.
     *
     * @param  int              $id
     * @param UpdateformationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateformationRequest $request)
    {
        $formation = $this->formationRepository->findWithoutFail($id);

        if (empty($formation)) {
            Flash::error('Formation not found');

            return redirect(route('admin.formations.index'));
        }

        $formation = $this->formationRepository->update($request->all(), $id);

        Flash::success('Formation updated successfully.');

        return redirect(route('admin.formations.index'));
    }

    /**
     * Remove the specified formation from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $formation = $this->formationRepository->findWithoutFail($id);

        if (empty($formation)) {
            Flash::error('Formation not found');

            return redirect(route('admin.formations.index'));
        }

        $this->formationRepository->delete($id);

        Flash::success('Formation deleted successfully.');

        return redirect(route('admin.formations.index'));
    }
}
