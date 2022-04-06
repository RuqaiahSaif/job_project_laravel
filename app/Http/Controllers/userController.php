<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
     public function adminDashboard()
    {

         return view('admin.dashboard.add_user');
    }

 public function list_users()
    {

         return view('admin.dashboard.list_users');
    }

}
