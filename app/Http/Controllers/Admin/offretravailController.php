<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateoffretravailRequest;
use App\Http\Requests\Admin\UpdateoffretravailRequest;
use App\Repositories\Admin\offretravailRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use auth;

class offretravailController extends AppBaseController
{
    /** @var  offretravailRepository */
    private $offretravailRepository;

    public function __construct(offretravailRepository $offretravailRepo)
    {
        $this->offretravailRepository = $offretravailRepo;
    }

    /**
     * Display a listing of the offretravail.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {



        $this->offretravailRepository->pushCriteria(new RequestCriteria($request));
        $offretravails = $this->offretravailRepository->findByField('id_entreprise',$id=Auth::user()->id);

        return view('admin.offretravails.index')
            ->with('offretravails', $offretravails);
    }

    /**
     * Show the form for creating a new offretravail.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.offretravails.create');
    }

    /**
     * Store a newly created offretravail in storage.
     *
     * @param CreateoffretravailRequest $request
     *
     * @return Response
     */
    public function store(CreateoffretravailRequest $request)
    {
        $input = $request->all();

        $offretravail = $this->offretravailRepository->create($input);

        Flash::success('Offretravail saved successfully.');

        return redirect(route('admin.offretravails.index'));
    }

    /**
     * Display the specified offretravail.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $offretravail = $this->offretravailRepository->findWithoutFail($id);

        if (empty($offretravail)) {
            Flash::error('Offretravail not found');

            return redirect(route('admin.offretravails.index'));
        }

        return view('admin.offretravails.show')->with('offretravail', $offretravail);
    }

    /**
     * Show the form for editing the specified offretravail.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $offretravail = $this->offretravailRepository->findWithoutFail($id);

        if (empty($offretravail)) {
            Flash::error('Offretravail not found');

            return redirect(route('admin.offretravails.index'));
        }

        return view('admin.offretravails.edit')->with('offretravail', $offretravail);
    }

    /**
     * Update the specified offretravail in storage.
     *
     * @param  int              $id
     * @param UpdateoffretravailRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateoffretravailRequest $request)
    {
        $offretravail = $this->offretravailRepository->findWithoutFail($id);

        if (empty($offretravail)) {
            Flash::error('Offretravail not found');

            return redirect(route('admin.offretravails.index'));
        }

        $offretravail = $this->offretravailRepository->update($request->all(), $id);

        Flash::success('Offretravail updated successfully.');

        return redirect(route('admin.offretravails.index'));
    }

    /**
     * Remove the specified offretravail from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $offretravail = $this->offretravailRepository->findWithoutFail($id);

        if (empty($offretravail)) {
            Flash::error('Offretravail not found');

            return redirect(route('admin.offretravails.index'));
        }

        $this->offretravailRepository->delete($id);

        Flash::success('Offretravail deleted successfully.');

        return redirect(route('admin.offretravails.index'));
    }
}
