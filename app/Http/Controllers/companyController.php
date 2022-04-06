<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class companyController extends Controller
{
   public function add_company()
    {

         return view('admin.dashboard.add_company');
    }

 public function list_companys()
    {

         return view('admin.dashboard.list_companys');
    }
}
