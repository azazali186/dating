<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use URL;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Seller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Session;

class AuthController extends Controller
{
    function registersave(Request $request)
    {
        $validateUser = Validator::make(
            $request->all(),
            [
                'mobile' => [
                    'required',
                    'unique:users',
                    'numeric',
                    // 'digits_between:10,11',
                    // 'regex:/^(0[1-9]\d{9}|[1-9]\d{9,10})$/',
                ],
                'email' => 'required|string|email|unique:users',
                'password' => [
                    'required_with:confirmpassword',
                    'min:6',
                ],
                'confirmpassword' => 'required',
                'name' => 'required|regex:/^[\pL\s\-]+$/u|min:2|max:50',
                'lookingfor' => 'required',
                'gender' => 'required',
                'matrital_status' => 'required',
                'city' => 'required',
            ]
        );

        if ($validateUser->fails()) {
            return redirect()->back()->withErrors($validateUser)->withInput();
        }

        if ($request->password == $request->confirmpassword) {
            $user = User::create([
                'mobile' => $request->mobile,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'name' => $request->name,
                'birthday' => $request->birthday,
                'lookingfor' => $request->lookingfor,
                'gender' => $request->gender,
                'matrital_status' => $request->matrital_status,
                'city' => $request->city,
                // 'image' => $img_url,
            ]);
            $sessdata = array(
                'id' => $user->id,
                'mobile' => $user->mobile,
                'email' => $user->email,
                'name' => $user->name,
                'birthday' => $user->birthday,
                'lookingfor' => $user->lookingfor,
                'gender' => $user->gender,
                'matrital_status' => $user->matrital_status,
                'city' => $user->city,
                'role' => 'user',
                'pricing_table' => $user->pricing_table,
            );
            $request->session()->put('sessdata', $sessdata);
            return redirect()->to('login/')->with('success', 'Registration successfully!');
        } else {
            return redirect()->to('register/')->with('error', 'Your Password is not match with Confirmpasswod')->withInput();
        }
    }

    function login(Request $request)
    {
        $validateUser = Validator::make(
            $request->all(),
            [
                'mobile' => ['required', 'numeric'],
                'password' => ['required_with:confirmpassword', 'string'],
            ]
        );

        if ($validateUser->fails()) {
            return redirect()->back()->withErrors($validateUser)->withInput();
        }

        $user = User::where('mobile', $request->mobile)->first();
        if (!empty($user)) {
            if ($user->status != '1') {
                return back()->with('error', 'Your Account has been blocked,Please Contact Administrator!');
            }
            if (Hash::check($request->password, $user->password)) {
                $sessdata = array(
                    'id' => $user->id,
                    'mobile' => $user->mobile,
                    'email' => $user->email,
                    'name' => $user->name,
                    'birthday' => $user->birthday,
                    'lookingfor' => $user->lookingfor,
                    'gender' => $user->gender,
                    'matrital_status' => $user->matrital_status,
                    'city' => $user->city,
                    'role' => $user->role,
                    'pricing_table' => $user->pricing_table,
                );
                $request->session()->put('sessdata', $sessdata);
                return redirect('user-profile')->withsuccess('Login Successfully!');
            } else {
                return back()->with('warning', 'Invalid Mobile or Password!');
            }
        } else {
            $seller = Seller::where('mobile', $request->mobile)->first();
            if (!empty($seller)) {
                if ($seller->status != '1') {
                    return back()->with('error', 'Your Account has been blocked,Please Contact Administrator!');
                }

                if (Hash::check($request->password, $seller->password)) {
                    $sessdata = array(
                        'id' => $seller->id,
                        'mobile' => $seller->mobile,
                        'email' => $seller->email,
                        'name' => $seller->name,
                        'birthday' => $seller->birthday,
                        'profile_photo' => $seller->profile_photo,
                        'gender' => $seller->gender,
                        'price' => $seller->price,
                        'city' => $seller->city,
                        'role' => $seller->role,
                    );
                    $request->session()->put('sessdata', $sessdata);

                    return redirect('/seller-profile')->withsuccess('Login Successfully!');
                } else {
                    return back()->with('warning', 'Invalid Mobile or Password!');
                }
            }

            return back()->with('warning', 'Your mobile Number is not reister with us!');
        }
    }

    function logout()
    {
        Session::flush();
        return redirect('/')->withsuccess('LogOut Successfully !');
    }

    function Sellerregister(Request $request)
    {
        $validateUser = Validator::make(
            $request->all(),
            [
                'mobile' => [
                    'required',
                    'unique:sellers',
                    'numeric',
                    // 'digits_between:10,11',
                    // 'regex:/^(0[1-9]\d{9}|[1-9]\d{9,10})$/',
                ],
                'email' => 'required|string|email|unique:sellers',
                'password' => [
                    'required_with:confirmpassword',
                    //'string',
                    'min:6',
                    //'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/',
                ],
                'confirmpassword' => 'required',
                'name' => 'required',
                // 'birthday' => 'required|date_format:Y-m-d|before:' . \Carbon\Carbon::now()->subYears(18)->format('Y-m-d'),
                'price' => 'required',
                'gender' => 'required',
                'address' => 'required',
            ]
        );

        if ($validateUser->fails()) {
            return redirect()->back()->withErrors($validateUser)->withInput();
        }
        if ($request->password == $request->confirmpassword) {

            $img_url = '';
            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = 'profile_' . date('Ymd') . $file->getClientOriginalName();
                $file->move(public_path('website/assets/profile_pic/'), $filename);
                $img_url = URL::asset('public/website/assets/profile_pic') . '/' . $filename;
            }
            $seller = Seller::create([
                'mobile' => $request->mobile,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'name' => $request->name,
                'birthday' => $request->birthday,
                'profile_photo' => $img_url,
                'gender' => $request->gender,
                'price' => $request->price,
                'city' => $request->address,

            ]);
            $sessdata = array(
                'id' => $seller->id,
                'mobile' => $seller->mobile,
                'email' => $seller->email,
                'name' => $seller->name,
                'birthday' => $seller->birthday,
                'profile_photo' => $seller->profile_photo,
                'gender' => $seller->gender,
                'price' => $seller->price,
                'city' => $seller->city,
                'role' => 'seller',
            );
            $request->session()->put('sessdata', $sessdata);
            return redirect()->to('login/')->with('success', 'Registration successfully!');
        } else {
            return redirect()->to('seller/')->with('error', 'Your Password is not match with Confirmpasswod')->withInput();
        }
    }


    function bannerList(Request $request)
    {
        $banners = Banner::get();

        return view('admin.banner', compact('banners'));
    }

    function editBanner(Banner $banner)
    {
        // dd($banner);
        return view('admin.editBanner', compact('banner'));
    }

    function bannerUpdate(Banner $banner, Request $request)
    {
        if ($request->file('photos')) {
            $file = $request->file('photos');
            $filename = 'profile_' . date('Ymd') . $file->getClientOriginalName();
            $file->move(public_path('website/assets/images/banner/'), $filename);
            $data['photos'] = URL::asset('public/website/assets/images/banner') . '/' . $filename;

            $banner->update($data);
        }

        return redirect('admincon/banner-list')->with('success', 'Updated successfully!');
    }
    function demoChart()
    {
        if (Session::has('sessdata') && Session::get('sessdata')['role'] == 'seller') {
            $sellerId = Session::get('sessdata')['id'];

            return view('website.demoChart', compact('sellerId'));
        } else {
            return Redirect::to('login');
        }
    }
}
