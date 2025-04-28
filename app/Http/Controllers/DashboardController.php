<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        return view('main', [
            'page' => 'dashboard',
            'title' => 'Dashboard',
        ]);
    }
}
