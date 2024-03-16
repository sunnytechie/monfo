<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function donation() {
        return view('donation');
    }

    public function volunteer() {
        return view('volunteer');
    }
}
