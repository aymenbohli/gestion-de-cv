<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Flash;
use app\Models\Admin\users;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Admin\UpdateusersRequest;

class ProfileController extends Controller
{
   	public function __construct()
    {
       $this->middleware('auth');
    }

    public function editprofile()
    {
    	   $user = User::find(Auth::user()->id);    
        return view('admin.Profile',["user" => $user]);
    }
    
    
    public function saveeditprofile(Request $input , UpdateusersRequest $request){
        
        
        
//        $this->validate($request, [
//                            'password' => 'required|min:6|confirmed',
//                        ]);

                        $user =new User();
                        $user->id = $input["id"];
                        $user->name = $input["name"];
                        $user->email = $input["email"];
                        $user->password = Hash::make(Input::get('password'));
                        $user->photo = Input::get('photo');
                        $user->cin = $input["cin"];
                        $user->adresse = $input["adresse"];
                        $user->non_entreprise = $input["non_entreprise"];
                        $user->numtel = $input["numtel"];
                        $user->domaine = $input["domaine"];
                        $user->datenais = $input["datenais"];
                

                if (Input::hasFile('photo'))
                {
                     $file = Input::file('photo');

                     $filename = time().'.'.$file->getClientOriginalExtension();
                     $destinationPath = public_path('/Uploads/images');
                     $request->file('photo')->move($destinationPath, $filename);
                
                  $user = User::where('id', '=', $user->id)->update(array(
                                                'name' => $user->name ,
                                                'email' => $user->email ,
                                                'password' => $user->password,
                                                'photo' => $filename,
                                                'cin' => $user->cin,
                                                'adresse' => $user->adresse,
                                                'non_entreprise' => $user->non_entreprise,
                                                'numtel' => $user->numtel,
                                                'domaine' => $user->domaine ,
                                                'datenais' => $user->datenais,
                                               ));

                   }
                   
            else
                {
                     
                  $user = User::where('id', '=', $user->id)->update(array(
                                                'name' => $user->name ,
                                                'email' => $user->email ,
                                                'password' => $user->password,
                                                'cin' => $user->cin,
                                                'adresse' => $user->adresse,
                                                'non_entreprise' => $user->non_entreprise,
                                                'numtel' => $user->numtel,
                                                'domaine' => $user->domaine ,
                                                'datenais' => $user->datenais,
                                               ));

                   }
        
        
    
        Flash::success('succes update');
        return redirect('admin/Profile');
    }
}
