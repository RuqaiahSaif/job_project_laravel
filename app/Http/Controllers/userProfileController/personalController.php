<?php

namespace App\Http\Controllers\userProfileController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class personalController extends Controller
{
        public function add_personalInfo()
    {

         return view('userProfile.userProfileDash.add_personal');
    }

 public function list_personalInfo()
    {

         return view('userProfile.userProfileDash.list_personal');
    }
}
