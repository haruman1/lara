<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class RegisterController extends Controller
{
    public function showRegisterForm()
    {

        return view('auth.register', ['layout' => 'layouts.auth']);
    }


    public function register(Request $request)
    {
        // Registration logic here

    }
}
