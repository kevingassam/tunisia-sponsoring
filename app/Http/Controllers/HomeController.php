<?php

namespace App\Http\Controllers;

//require './vendor/autoload.php';


use App\Models\reset_password_token;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{


    public function home()
    {
        return view('front.index');
    }


    public function logout()
    {
        auth()->logout();
        return redirect()->route('home');
    }

    public function connexion()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        } else {
            return view('front.connexion');
        }
    }

}
