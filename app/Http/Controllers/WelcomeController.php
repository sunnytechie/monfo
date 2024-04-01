<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MonfoDonation;
use App\Models\MonfoTrainings;
use Unicodeveloper\Paystack\Facades\Paystack;

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
            'donate_amount' => 'required|numeric',
        ]);

        $ref = Paystack::genTranxRef();
        $donation = MonfoDonation::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'donate_amount' => $request->donate_amount,
            'reference' => $ref,
        ]);

        $callback_url = route('donation.payment.callback');
        $data = array(
            "amount" => $request->donate_amount * 100,
            "reference" => $ref,
            "email" => $request->email,
            "callback_url" => $callback_url,
        );

        return Paystack::getAuthorizationUrl($data)->redirectNow();

        //return redirect()->route('donation')->with('success', 'You have successfully donated');
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
            'course' => 'required',
        ]);

        try {
            MonfoTrainings::create($request->all());

            return redirect()->route('training')->with('success', 'You have successfully registered for the training');
        } catch (\Exception $e) {
            return redirect()->route('training')->with('failed', 'An error occurred while registering for the training');
        }
    }
}
