<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index() {
        return view('main', [
            'title' => 'Pasien',
            'page' => 'pasien'
        ]);
    }
}
