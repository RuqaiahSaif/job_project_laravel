<?php

namespace App\Http\Controllers\userProfileController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class skillController extends Controller
{
     public function add_skill()
    {

         return view('userProfile.userProfileDash.add_skill');
    }

 public function list_skill()
    {

        Validator::validate($request->all(),[
           'name' => 'required',
          'level' => 'required',
          'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
          'is_active'=>'required'
      ],[
          'name.required' => 'this field is required',
          'description.required' =>'this field is required',
          'image.required' => 'this field is required',
          'image.mimes'=>'this type dosnot support',
          'is_active.required'=>'this field is required'
      ]);
      $s=new services();


      $s->name=$request->input('name');
       $s->description=$request->input('description');
        $s->image= $request->file('image')->store('public/images');
        //  $s->is_active=$request->input('is_active');
       if($s->save())
        return redirect()->route('list_services')
        ->with(['success'=>'user created successful']);
        return back()->with(['error'=>'can not create user']);
    }
}
