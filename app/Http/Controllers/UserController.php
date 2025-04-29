<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->get();

        return view('main', compact('users'), [
            'title' => 'Users',
            'page' => 'user',
        ]);
    }

    public function add()
    {
        $users = User::latest()->get();

        return view('main', compact('users'), [
            'title' => 'Tambah Data User',
            'page' => 'user_form'
        ]);
    }

    public function insert()
    {
        $users = User::latest()->get();

    }

    public function view($id) {
        $users = User::with('profiles')->findOrFail($id);

        return view('main', [
            'title' => 'Detail User',
            'page' => 'user_form',
            'users' => $users
        ]);
    }
}
