<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admincontroller extends Controller
{
    //
    public function home()
    {
        return view('user.admin.admin');
    }
    public function manageUsers()
    {
        $users = User::all(); // Récupère tous les utilisateurs

        return view('admin.users', compact('users'));
    }
}
