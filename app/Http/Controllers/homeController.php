<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
   public function index()
    {

         return view('index');
    }
    //  public function home()
    // {

    //      return view('home');
    // }
     public function about()
    {

         return view('about');
    }

     public function companies()
    {

         return view('companies');
    }
      public function contact()
    {

         return view('contact');
    }
     public function acount()
    {

         return view('acount');
    }
     public function dashboard()
    {

         return view('dashboard');
    }
     public function jobdetails()
    {

         return view('jobdetails');
    }
     public function jobs()
    {

         return view('jobs');
    }
     public function loginpage()
    {

         return view('loginpage');
    }
      public function profile()
    {

         return view('profile');
    }
     public function service()
    {

         return view('service');
    }
     public function signup()
    {

         return view('signup');
    }




}
