<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;

class UserController extends Controller
{
    public function index() {
        $users = User::latest()->get();

        return view('main', compact('users'), [
            'title' => 'Users',
            'page' => 'user',
        ]);
    }
}
