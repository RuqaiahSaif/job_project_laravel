<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adsController extends Controller
{
     public function add_ads()
    {

         return view('admin.dashboard.add_ads');
    }

 public function list_ads()
    {

         return view('admin.dashboard.list_ads');
    }
}
