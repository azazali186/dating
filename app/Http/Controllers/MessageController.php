<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
        //
    }
}
