<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\offretravail;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $offretravails= offretravail::orderBy('id', 'DESC')->get();


       $users = DB::select('SELECT COUNT(domaine) AS a , domaine AS b FROM users WHERE role LIKE \'client\' GROUP BY domaine');
        $offre = DB::select(' SELECT COUNT(type) AS b, type AS a FROM offretravails GROUP BY type');

       return view('home')
           ->with('offretravails', $offretravails)
           ->with('users',$users)
           ->with('offre',$offre);
    }
}
