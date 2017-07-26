<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateexperienceRequest;
use App\Http\Requests\Admin\UpdateexperienceRequest;
use App\Repositories\Admin\experienceRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use auth;
use App\Models\Admin\experience;

class experienceController extends AppBaseController
{
    /** @var  experienceRepository */
    private $experienceRepository;

    public function __construct(experienceRepository $experienceRepo)
    {
        $this->experienceRepository = $experienceRepo;
    }

    /**
     * Display a listing of the experience.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $id=Auth::user()->id;
        $experiences = experience::where('id_clt',$id)->get();
        
        return view('admin.experiences.index')
            ->with('experiences', $experiences);
    }

    /**
     * Show the form for creating a new experience.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.experiences.create');
    }

    /**
     * Store a newly created experience in storage.
     *
     * @param CreateexperienceRequest $request
     *
     * @return Response
     */
    public function store(CreateexperienceRequest $request)
    {
        $input = $request->all();

        $experience = $this->experienceRepository->create($input);

        Flash::success('Experience saved successfully.');

        return redirect(route('admin.experiences.index'));
    }

    /**
     * Display the specified experience.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $experience = $this->experienceRepository->findWithoutFail($id);

        if (empty($experience)) {
            Flash::error('Experience not found');

            return redirect(route('admin.experiences.index'));
        }

        return view('admin.experiences.show')->with('experience', $experience);
    }

    /**
     * Show the form for editing the specified experience.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $experience = $this->experienceRepository->findWithoutFail($id);

        if (empty($experience)) {
            Flash::error('Experience not found');

            return redirect(route('admin.experiences.index'));
        }

        return view('admin.experiences.edit')->with('experience', $experience);
    }

    /**
     * Update the specified experience in storage.
     *
     * @param  int              $id
     * @param UpdateexperienceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateexperienceRequest $request)
    {
        $experience = $this->experienceRepository->findWithoutFail($id);

        if (empty($experience)) {
            Flash::error('Experience not found');

            return redirect(route('admin.experiences.index'));
        }

        $experience = $this->experienceRepository->update($request->all(), $id);

        Flash::success('Experience updated successfully.');

        return redirect(route('admin.experiences.index'));
    }

    /**
     * Remove the specified experience from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $experience = $this->experienceRepository->findWithoutFail($id);

        if (empty($experience)) {
            Flash::error('Experience not found');

            return redirect(route('admin.experiences.index'));
        }

        $this->experienceRepository->delete($id);

        Flash::success('Experience deleted successfully.');

        return redirect(route('admin.experiences.index'));
    }
}
