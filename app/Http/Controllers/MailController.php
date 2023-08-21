<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\DemoMail;

class MailController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $email = 'sushil.as.cambodia@gmail.com';
        $header = 'Sushil';
        $textMessage = '245368';

        return $this->sendOtp($email, $header, $textMessage);

        return view('emails.demoMail');
        dd("Email is sent successfully.");
    }



    public function sendOtp($email, $header, $textMessage)
    {
        $mailData = [
            'title' => $header,
            'body' => 'This is for testing Sushil email.',
            'textMessage' => $textMessage,
        ];

        Mail::to($email)->send(new DemoMail($mailData));
    }
}
