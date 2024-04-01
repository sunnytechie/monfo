<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MonfoDonation;
use Unicodeveloper\Paystack\Facades\Paystack;

class PaystackCallbackUrlController extends Controller
{
    public function donationCallback() {
        $paymentDetails = Paystack::getPaymentData();

        //dd($paymentDetails);
        if($paymentDetails['data']['status'] == 'success') {
            $donation = MonfoDonation::where('reference', $paymentDetails['data']['reference'])->first();
            $donation->status = 'success';
            $donation->save();

            return redirect()->route('welcome')->with('success', 'Your donation to Rev. Mrs Nches Foundation is successful, thank you.');
        }

            return redirect()->route('welcome')->with('failed', 'Your donation failed, please try again.');
    }
}
