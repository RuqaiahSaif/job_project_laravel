<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
class SettingsController extends Controller
{
    function generateRoles(){

        Role::create([
            'name' => 'super_admin',
            'display_name' => 'management system', // optional
            //'description' => 'User is the owner of a given project', // optional
        ]);

        Role::create([
            'name' => 'admin',
            'display_name' => 'content managment', // optional
            //'description' => 'User is the owner of a given project', // optional
        ]);

        Role::create([
            'name' => 'client',
            'display_name' => 'clients', // optional
            //'description' => 'User is the owner of a given project', // optional
        ]);

    }
}
