<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Home extends Controller
{
    public function index()
    {
        // Carga la vista "Home"
        return view('Home');
    }

    public function signup()
    {
        // Carga la vista "authentication/sign-up"
        return view('authentication/sign-up');
    }

    public function signin()
    {
        // Carga la vista "authentication/sign-in"
        return view('authentication/sign-in');
    }
}
