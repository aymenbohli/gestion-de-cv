<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\Models\Admin\Role;
use App\Models\Admin\role_users;
use DB;
use Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Contracts\Auth\Guard;
use Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

  

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

     
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
     public function register(Request $request)
    {
         $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'role' => 'required'
        ]); 
         
        $input = $request->all();
       
        if(Input::get('role') == 7)
        {
             $input['role']="admin";   
        }
        elseif(Input::get('role') == 6)
        {
             $input['role']="client";
        }
       else if(Input::get('role') == 8){
             $input['role']="company";
        }
            
        $input['password'] = Hash::make($input['password']);
        $user = User::create($input);
        
        $role_users =new role_users();
         $role_users->roles= Input::get('role');            
         $lastInsertedId= $user->id;

         $role_users=role_users::create(array(  
             'role_id'=> $role_users->roles,
             'user_id'=> $lastInsertedId,
             ));
         
           $this->guard()->login($user);

        return redirect('home');
    }
 
    
     /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard();
    }
}
