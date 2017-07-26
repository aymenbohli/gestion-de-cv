<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreatedomaineRequest;
use App\Http\Requests\Admin\UpdatedomaineRequest;
use App\Repositories\Admin\domaineRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class domaineController extends AppBaseController
{
    /** @var  domaineRepository */
    private $domaineRepository;

    public function __construct(domaineRepository $domaineRepo)
    {
        $this->domaineRepository = $domaineRepo;
    }

    /**
     * Display a listing of the domaine.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->domaineRepository->pushCriteria(new RequestCriteria($request));
        $domaines = $this->domaineRepository->all();

        return view('admin.domaines.index')
            ->with('domaines', $domaines);
    }

    /**
     * Show the form for creating a new domaine.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.domaines.create');
    }

    /**
     * Store a newly created domaine in storage.
     *
     * @param CreatedomaineRequest $request
     *
     * @return Response
     */
    public function store(CreatedomaineRequest $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:domaines',
        ]);

        $input = $request->all();

        $domaine = $this->domaineRepository->create($input);

        Flash::success('Domaine saved successfully.');

        return redirect(route('admin.domaines.index'));
    }

    /**
     * Display the specified domaine.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $domaine = $this->domaineRepository->findWithoutFail($id);

        if (empty($domaine)) {
            Flash::error('Domaine not found');

            return redirect(route('admin.domaines.index'));
        }

        return view('admin.domaines.show')->with('domaine', $domaine);
    }

    /**
     * Show the form for editing the specified domaine.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $domaine = $this->domaineRepository->findWithoutFail($id);

        if (empty($domaine)) {
            Flash::error('Domaine not found');

            return redirect(route('admin.domaines.index'));
        }

        return view('admin.domaines.edit')->with('domaine', $domaine);
    }

    /**
     * Update the specified domaine in storage.
     *
     * @param  int              $id
     * @param UpdatedomaineRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatedomaineRequest $request)
    {
        $domaine = $this->domaineRepository->findWithoutFail($id);

        if (empty($domaine)) {
            Flash::error('Domaine not found');

            return redirect(route('admin.domaines.index'));
        }

        $domaine = $this->domaineRepository->update($request->all(), $id);

        Flash::success('Domaine updated successfully.');

        return redirect(route('admin.domaines.index'));
    }

    /**
     * Remove the specified domaine from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $domaine = $this->domaineRepository->findWithoutFail($id);

        if (empty($domaine)) {
            Flash::error('Domaine not found');

            return redirect(route('admin.domaines.index'));
        }

        $this->domaineRepository->delete($id);

        Flash::success('Domaine deleted successfully.');

        return redirect(route('admin.domaines.index'));
    }
}
