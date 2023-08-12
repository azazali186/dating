<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;

class MessageController extends Controller
{
    public function index()
    {
        if ((!Session::has('sessdata'))) {
            return Redirect::to('login');
        }
        $role = Session::get('sessdata')['role'];
        $messages = Message::with(['user', 'seller'])->groupBy('seller_id')->orderBy('created_at', 'desc')->where('user_id', Session::get('sessdata')['id'])->get();

        return view('website.message', compact('messages'));
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
        Message::create($data);

        return redirect()->back()->with('success', 'Sent successfully!');
    }
}
