<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class servicesController extends Controller
{
    public function add_services()
    {

         return view('admin.dashboard.add_services');
    }

 public function list_services()
    {

         return view('admin.dashboard.list_services');
    }
}
