<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateentretienRequest;
use App\Http\Requests\Admin\UpdateentretienRequest;
use App\Repositories\Admin\entretienRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\User;
use Auth;
use App\Models\Admin\entretien;

class entretienController extends AppBaseController
{
    /** @var  entretienRepository */
    private $entretienRepository;

    public function __construct(entretienRepository $entretienRepo)
    {
        $this->entretienRepository = $entretienRepo;
    }

    /**
     * Display a listing of the entretien.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->entretienRepository->pushCriteria(new RequestCriteria($request));
        $entretiens = $this->entretienRepository->findByField('id_entreprise',$id=Auth::user()->id);

        return view('admin.entretiens.index')
            ->with('entretiens', $entretiens);
    }

    /**
     * Show the form for creating a new entretien.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.entretiens.create');
    }

    /**
     * Store a newly created entretien in storage.
     *
     * @param CreateentretienRequest $request
     *
     * @return Response
     */
    public function store(CreateentretienRequest $request)
    {
        $input = $request->all();

        $entretien = $this->entretienRepository->create($input);

        Flash::success('Entretien saved successfully.');

        return redirect(route('admin.entretiens.index'));
    }

    /**
     * Display the specified entretien.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $entretien = $this->entretienRepository->findWithoutFail($id);

        if (empty($entretien)) {
            Flash::error('Entretien not found');

            return redirect(route('admin.entretiens.index'));
        }

        return view('admin.entretiens.show')->with('entretien', $entretien);
    }

    /**
     * Show the form for editing the specified entretien.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $entretien = $this->entretienRepository->findWithoutFail($id);

        if (empty($entretien)) {
            Flash::error('Entretien not found');

            return redirect(route('admin.entretiens.index'));
        }

        return view('admin.entretiens.edit')->with('entretien', $entretien);
    }

    /**
     * Update the specified entretien in storage.
     *
     * @param  int              $id
     * @param UpdateentretienRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateentretienRequest $request)
    {
        $entretien = $this->entretienRepository->findWithoutFail($id);

        if (empty($entretien)) {
            Flash::error('Entretien not found');

            return redirect(route('admin.entretiens.index'));
        }

        $entretien = $this->entretienRepository->update($request->all(), $id);

        Flash::success('Entretien updated successfully.');

        return redirect(route('admin.entretiens.index'));
    }

    /**
     * Remove the specified entretien from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $entretien = $this->entretienRepository->findWithoutFail($id);

        if (empty($entretien)) {
            Flash::error('Entretien not found');

            return redirect(route('admin.entretiens.index'));
        }

        $this->entretienRepository->delete($id);

        Flash::success('Entretien deleted successfully.');

        return redirect(route('admin.entretiens.index'));
    }

    public function entretienclt()
    {
        $id=Auth::user()->email;
        $entretien = entretien::where('id_clt',$id)->get();
        return view('admin.entretien')
            ->with("entretien",$entretien);

    }




}

