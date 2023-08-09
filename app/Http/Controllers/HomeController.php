<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Seller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;

class HomeController extends Controller
{

    function index(Request $request)
    {
        // dd(Session::get('sessdata'));
        $seller = Seller::where('status', 1)->get();
        return view('website.index', compact('seller'));
    }
    function singleMember(Request $request)
    {
        $sellerId = $request->id;
        $seller = Seller::where('id', $sellerId)->where('status', 1)->first();
        if (Session::has('sessdata') && Session::get('sessdata')['role'] == 'user') {
            if (getSubscription() == 'Free') {
                return Redirect::to('pricing-table');
            }
        } elseif (Session::has('sessdata') && Session::get('sessdata')['role'] == 'seller' &&  Session::get('sessdata')['id'] == $sellerId) {
            return view('website.member-single', compact('seller', 'sellerId'));
        } else {
            return Redirect::to('login');
        }
        // dd($seller);
        return view('website.member-single', compact('seller', 'sellerId'));
    }
    function sellerProfile(Request $request)
    {
        if (Session::has('sessdata') && Session::get('sessdata')['role'] == 'seller') {
            $sellerId = Session::get('sessdata')['id'];
            $seller = Seller::where('id', $sellerId)->where('status', 1)->first();
            return view('website.seller-profile', compact('seller', 'sellerId'));
        } else {
            return Redirect::to('login');
        }
    }
    function userProfile(Request $request)
    {
        if (Session::has('sessdata') && Session::get('sessdata')['role'] == 'user') {
            $userId = Session::get('sessdata')['id'];
            $user = User::where('id', $userId)->where('status', 1)->first();
            return view('website.user-profile', compact('user', 'userId'));
        } else {
            return Redirect::to('login');
        }
    }
}
