<?php

namespace App\Http\Controllers;

class UserControler extends Controller
{
    public function create()
    {
        return view('register');
    }
}
