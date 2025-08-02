<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\InquiryOtpMail;

use App\Models\Contact;

class OTPController extends Controller
{
    public function sendOTP(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        // $isexists = Contact::where('email', $request->email)->first();
        // if ($isexists) {
        //     return response()->json(['success' => false, 'is_exists' => true ,'message' => 'OTP sent successfully!']);
        // }

        
        $otp = rand(100000, 999999); // Generate 6-digit OTP        

        $inquiry = Contact::where('email', $request->email)->first();

        if ($inquiry) {
            $inquiry->otp = $otp;
            $inquiry->save();
        }
        else{
            $inquiry = new Contact();
            $inquiry->email = $request->email;
            $inquiry->otp = $otp;
            $inquiry->save();
        }

        $email = $request->email;

        // $email = 'sahilkhan05861@gmail.com';


        // Send OTP via email
        Mail::to($email)->send(new InquiryOtpMail($otp));

        return response()->json(['success' => true, 'message' => 'OTP sent successfully!']);
    }
}
