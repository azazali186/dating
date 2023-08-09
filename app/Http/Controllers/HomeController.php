<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Seller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use URL;
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
        } elseif (Session::has('sessdata') && Session::get('sessdata')['role'] == 'seller' && Session::get('sessdata')['id'] == $sellerId) {
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
    function userProfileEdit(Request $request)
    {
        $user = User::where('id', $request->userId)->first();
        $password = $request->password;
        if ($password != '') {
            if ($request->password == $request->confirmpassword) {
                $user->update([
                    'password' => Hash::make($request->password),
                    'name' => $request->name,
                    'birthday' => $request->birthday,
                    'lookingfor' => $request->lookingfor,
                    'gender' => $request->gender,
                    'matrital_status' => $request->matrital_status,
                    'city' => $request->city,
                ]);
            } else {
                return redirect()->back()->with('error', 'Your Password is not match with Confirmpasswod');
            }
        } else {
            $user->update([
                'name' => $request->name,
                'birthday' => $request->birthday,
                'lookingfor' => $request->lookingfor,
                'gender' => $request->gender,
                'matrital_status' => $request->matrital_status,
                'city' => $request->city,
            ]);
        }
        return redirect()->back()->with('success', 'Update successfully!');
    }

    function sellerProfileEdit(Request $request)
    {
        $seller = Seller::where('id', $request->sellerId)->first();
        $password = $request->password;
        $img_url = $seller->image;
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = 'profile_' . date('Ymd') . $file->getClientOriginalName();
            $file->move(public_path('website/assets/profile_pic/'), $filename);
            $img_url = URL::asset('public/website/assets/profile_pic') . '/' . $filename;
        }
        if ($password != '') {
            if ($request->password == $request->confirmpassword) {
                $seller->update([
                    'password' => Hash::make($request->password),
                    'name' => $request->name,
                    'birthday' => $request->birthday,
                    'image' => $img_url,
                    'gender' => $request->gender,
                    'price' => $request->price,
                    'city' => $request->address,
                ]);
            } else {
                return redirect()->back()->with('error', 'Your Password is not match with Confirmpasswod');
            }
        } else {
            $seller->update([
                'name' => $request->name,
                'birthday' => $request->birthday,
                'image' => $img_url,
                'gender' => $request->gender,
                'price' => $request->price,
                'city' => $request->address,
            ]);
        }
        return redirect()->back()->with('success', 'Update successfully!');
    }
}
