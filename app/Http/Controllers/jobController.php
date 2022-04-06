<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class jobController extends Controller
{
   public function add_job()
    {

         return view('admin.dashboard.add_job');
    }

 public function list_jobs()
    {

         return view('admin.dashboard.list_jobs');
    }
}
