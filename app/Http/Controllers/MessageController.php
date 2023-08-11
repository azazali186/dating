<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Session;

class MessageController extends Controller
{
    public function index()
    {
        return view('website.message');
    }

    public function indexSeller()
    {
        return view('website.seller-message');
    }

    public function sendMessage(Request $request)
    {
        $data = $request->all();
        if (Session::has('sessdata') && Session::get('sessdata')['role'] == 'user') {
            if (getSubscription() == 'Free') {
                return Redirect::to('pricing-table');
            }
            $data['user_id'] = Session::get('sessdata')['id'];
        } elseif (Session::has('sessdata') && Session::get('sessdata')['role'] == 'seller') {
            $data['seller_id'] = Session::get('sessdata')['id'];
        } else {
            return Redirect::to('login');
        }
        $data['sender_type'] = Session::get('sessdata')['role'];

        dd($data);
    }
}
