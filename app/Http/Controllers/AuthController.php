<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index() {
        return view('pages.login');
    }

    public function login() {
        return view('pages.login');
    }


}
