<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{

     public function register(Request $request){

        Validator::validate($request->all(),[
            'name'=>['required','min:3','max:50'],
            'email'=>['required','email','unique:users'],
            'password'=>['required','min:5'],
            'confirm_pass'=>['same:password']



        ],[
            'name.required'=>'this field is required',
            'name.min'=>'can not be less than 3 letters',
            'email.unique'=>'there is an email in the table',
            'email.required'=>'this field is required',
            'email.email'=>'incorrect email format',
            'password.required'=>'password is required',
            'password.min'=>'password should not be less than 3',
            'confirm_pass.same'=>'password dont match',


        ]);

        $u=new User();
        $u->name=$request->name;
        $u->password=Hash::make($request->password);
        $u->email=$request->email;
        if($u->save())
        $u->attachRole('client');
        return redirect()->route('creatpersonal')
        ->with(['success'=>'user created successful']);
        return back()->with(['error'=>'can not create user']);

    }
    public function login(Request $request){
        Validator::validate($request->all(),[
            'email'=>['email','required','min:3','max:50'],
            'password'=>['required','min:5']


        ],[
            'email.required'=>'this field is required',
            'email.email'=>'incorrect email',


        ]);

        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){


            if(Auth::user()->hasRole('admin'))
            return redirect()->route('adminDashboard');
            else
            return redirect()->route('creatpersonal');


        }
        else {
            return redirect()->route('loginpage')->with(['message'=>'incorerct username or password or your account is not active ']);
        }


    }
    public function changePassword()
{
   return view('userProfile.userProfileDash.change-password');
}

public function updatePassword(Request $request)
{
        # Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);


        #Match The Old Password
        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("status", "Password changed successfully!");
}
}
