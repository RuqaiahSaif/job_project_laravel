<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class roleController extends Controller
{
    public function add_role()
    {

         return view('admin.dashboard.add_role');
    }

 public function list_roles()
    {

         return view('admin.dashboard.list_role');
    }
}
