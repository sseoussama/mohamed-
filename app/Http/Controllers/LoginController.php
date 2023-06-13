<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Logincontroller extends Controller
{

    public function orien()
    {
        return view('auth.orien');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

 /*   public function connexion()
    {
        session_start();


        $email = "email";
        $passw = "password";
        $role = "role";

        if (isset($_SESSION['id'])) {

            switch($_SESSION['role']){

                case 1:
                    return redirect()->to('admin');
                    break;

                case 2:
                    return redirect()->to('secretaire');
                    break;

                case 3 :
                    return redirect()->to('medecin');
                    break;

                default :
                    return redirect()->to('/');
            }
        }
    } */
     public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }
}
