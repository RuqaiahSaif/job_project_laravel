<?php

namespace App\Http\Controllers\userProfileController;
use App\Models\userProfile\personalInfo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class personalController extends Controller
{
        public function add_personalInfo()
    {

         return view('userProfile.userProfileDash.add_personal');
    }

 public function list_personalInfo()
    {

        $personals=personalInfo::all();

         return view('userProfile.userProfileDash.list_personal')
         ->with('allpersonals',$personals);
        //  return view('admin.dashboard.list_services');
    }
    // Create Form

  // Store Form data in database
  public function store(Request $request) {
      Validator::validate($request->all(),[
           'name' => 'required',
          'email' => 'required|email',
          'phone' => 'required',

           'address' => 'required',
          'gender' => 'required',
          'is_active'=>'required'
      ],[
          'name.required' => 'this field is required',
          'email.required' =>'this field is required',
          'phone.required' => 'this field is required',

          'is_active.required'=>'this field is required'
      ]);
      $p=new personalInfo();


      $p->name=$request->input('name');
       $p->email=$request->input('email');
        $p->phone=$request->input('phone');
    
        $p->address=$request->input('address');
       $p->gender=$request->input('gender');
       $p->is_active=$request->input('is_active');
        if($p->save())
        return redirect()->route('showpersonal')->with(['success'=>'data inserted successful']);
        return redirect()->back()->with(['error'=>'can not add data ']);

  }
    }

