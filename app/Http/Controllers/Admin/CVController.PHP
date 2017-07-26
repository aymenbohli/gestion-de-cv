<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Admin\centreinterets;
use App\Models\Admin\formation;
use App\Models\Admin\experience;
use App\Models\Admin\competences;
use App\User;
use Auth;
use App\Models\Admin\users;

class CVController extends AppBaseController
{
   

    /**
     * Display a listing of the users.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
         $id=Auth::user()->id;
        $formations = formation::where('id_clt',$id)->get();
        $experience = experience::where('id_clt',$id)->get();
        $competences = competences::where('id_clt',$id)->get();
        $centreinterets = centreinterets::where('id_clt',$id)->get();
        $user = User::find(Auth::user()->id);    
        
        return view('admin.cv')->with('centreinterets', $centreinterets)
                               ->with('formations', $formations)
                               ->with('experience', $experience)
                               ->with('competences', $competences)
                               ->with('user', $user);
    }

    public function show($id)
    {
        $formations = formation::where('id_clt',$id)->get();
        $experience = experience::where('id_clt',$id)->get();
        $competences = competences::where('id_clt',$id)->get();
        $centreinterets = centreinterets::where('id_clt',$id)->get();
        $user = User::find($id);  
        
        return view('admin.cv')->with('centreinterets', $centreinterets)
                               ->with('formations', $formations)
                               ->with('experience', $experience)
                               ->with('competences', $competences)
                               ->with('user', $user);
        
    }
    
    
     public function allcv()
    {
       
         $client="client";
        
         $users = users::where('role',$client)->get();
        
       return view('admin.allcv')->with('users', $users);
        
    }

}
