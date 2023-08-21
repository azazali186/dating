<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\DemoMail;
use App\Models\Seller;
use App\Models\User;

class MailController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index(Request $request)
    {
        $email = $request->email;
        $header = 'XmakeLove';
        $textMessage = '245368';


        $user = User::where('email', $request->email)->first();
        $seller = Seller::where('email', $request->email)->first();

        if (!empty($user)) {
            if ($user->status != '1') {
                return ['error', 'Your Account has been blocked,Please Contact Administrator!'];
            }
        } else if (!empty($seller)) {
            if ($seller->status != '1') {
                return ['error', 'Your Account has been blocked,Please Contact Administrator!'];
            }
        } else {
            return ['warning', 'Your email is not reister with us!'];
        }

        $this->sendOtp($email, $header, $textMessage);

        // return view('emails.demoMail');
        // dd("Email is sent successfully.");
    }



    public function sendOtp($email, $header, $textMessage)
    {
        $mailData = [
            'title' => $header,
            'body' => 'This is for recovery password email.',
            'textMessage' => $textMessage,
        ];

        Mail::to($email)->send(new DemoMail($mailData));
    }
}
