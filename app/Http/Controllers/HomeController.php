<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function show() {
        return "hello world";
    }
}
