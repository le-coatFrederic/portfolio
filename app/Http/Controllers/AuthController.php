<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request) {
        return view('auth.login');
    }

    public function doLogin(LoginRequest $request) {

    }
}
