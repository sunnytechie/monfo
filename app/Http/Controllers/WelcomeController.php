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

    public function donationPayment(Request $request) {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'donate_amount' => 'required',
        ]);

        dd($request->all());

        return redirect()->route('donation')->with('success', 'You have successfully donated');
    }

    public function register() {
        return view('register');
    }

    public function registerTrainings(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'training' => 'required',
        ]);

        dd($request->all());

        return redirect()->route('training')->with('success', 'You have successfully registered for the training');
    }
}
