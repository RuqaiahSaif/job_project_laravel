<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class userController extends Controller
{
     public function adminDashboard(Request $request)
    {

         return view('admin.dashboard.add_user');
    }

 public function list_users(Request $request)
    {
$users=User::all();

         return view('admin.dashboard.list_users')
         ->with('allusers',$users);
    }
     public function create_user(Request $request){

        Validator::validate($request->all(),[
            'name'=>['required','min:3','max:50'],
            'email'=>['required','email','unique:users'],
            'password'=>['required','min:5'],



        ],[
            'name.required'=>'this field is required',
            'name.min'=>'can not be less than 3 letters',
            'email.unique'=>'there is an email in the table',
            'email.required'=>'this field is required',
            'email.email'=>'incorrect email format',
            'password.required'=>'password is required',
            'password.min'=>'password should not be less than 3',



        ]);

        $u=new User();
        $u->name=$request->name;
        $u->password=Hash::make($request->password);
        $u->email=$request->email;
        if($u->save())
        return redirect()->route('list_users')
        ->with(['success'=>'user created successful']);
        return back()->with(['error'=>'can not create user']);

    }

}
