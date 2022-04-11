<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\services;

class servicesController extends Controller
{
    public function add_services(Request $request)
    {

         return view('admin.dashboard.add_services');
    }

 public function list_services()
    {
$servives=services::all();

         return view('admin.dashboard.list_services')
         ->with('allservices',$servives);
        //  return view('admin.dashboard.list_services');
    }
    // Create Form
public function createUserForm(Request $request) {
    return view('form');
  }
  // Store Form data in database
  public function store(Request $request) {
      Validator::validate($request->all(),[
           'name' => 'required',
          'description' => 'required',
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
        $s->image=$request->hasFile('image')?$this->uploadFile($request->file('image')):"default_category.png";
        if($s->save())
        return redirect()->route('list_services')->with(['success'=>'data inserted successful']);
        return redirect()->back()->with(['error'=>'can not add data ']);
        //  $s->is_active=$request->input('is_active');
    //    if($s->save())
    //     return redirect()->route('list_services')
    //     ->with(['success'=>'user created successful']);
    //     return back()->with(['error'=>'can not create user']);

      // Form validation
    //   $this->validate($request, [
    //       'name' => 'required',
    //       'description' => 'required',
    //       'company_image' => 'required',
    //       'is_active'=>'required'
    // print_r($request->input());

    //    ]);
      //  Store data in database
    //   Form::create($request->all());
    //   return back()->with('success', 'Your form has been submitted.');
  }

    public function edit_services($ser_id){
        $ser=services::find($ser_id);
        return view('admin.dashboard.edit_services')
        ->with('services',$ser);

    }


      public function update_services(Request $request,$ser_id){
         $ser=services::find($ser_id);
        $ser->name=$request->name;
        $ser->description=$request->description;
        $ser->is_active=$request->is_active;
        if($request->hasFile('image'))
        $ser->image=$this->uploadFile($request->file('image'));
        if($ser->save())
        return redirect()->route('list_services')->with(['success'=>'data updated successful']);
        return redirect()->back()->with(['error'=>'can not update data ']);



    }

      public function toggle_services($ser_id){

       $ser=services::find($ser_id);
        $ser->is_active*=-1;
        /*if($cat->is_active==0)
        $cat->is_active=1;
        else
        $cat->is_active=0;*/
        if($ser->save())
        return back()->with(['success'=>'data updated successful']);
        return back()->with(['error'=>'can not update data']);

    }

     public function uploadFile($file){
        $dest=public_path()."/images/";

        //$file = $request->file('image');
        $filename= time()."_".$file->getClientOriginalName();
        $file->move($dest,$filename);
        return $filename;


    }
}
