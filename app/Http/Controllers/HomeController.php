<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Photo;
use App\Models\PricingTable;
use App\Models\Seller;
use App\Models\SubscriptionUpload;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use URL;
use Session;

class HomeController extends Controller
{

    function index(Request $request)
    {
        $perPage = $request->rowsPerPage ?: 15;
        $page = $request->page ?: 1;
        $sortBy = $request->sortBy ?: 'created_at';
        $sortOrder = $request->descending == 'true' ? 'desc' : 'asc';

        $query = Seller::orderBy($sortBy, $sortOrder)->where('status', 1);

        $query->when($request->price_start && $request->price_end, function ($query) use ($request) {
            $query->whereBetween('price', [$request->price_start, $request->price_end,]);
        });
        $query->when($request->city, function ($query) use ($request) {
            $query->where('city', 'like', "%$request->city%");
        });
        $query->when($request->gender, function ($query) use ($request) {
            $query->where('gender', $request->gender);
        });

        $query->when($request->type, function ($query) use ($request) {
            if ($request->type == 'newest') {
                $query->orderBy('created_at', 'desc');
            }
            // if($request->type == 'popular'){
            //     $query->where('gender', $request->gender);
            // }
        });

        $query->when($request->age_start && $request->age_end, function ($query) use ($request) {
            $query->whereRaw('timestampdiff(year, birthday, curdate()) between ? and ?', [$request->age_start, $request->age_end,]);
        });

        $seller = $query->paginate($perPage, ['*'], 'page', $page)->withQueryString();
        // return $seller;
        return view('website.index', compact('seller'));
    }
    function singleMember(Request $request)
    {
        $sellerId = $request->id;
        $seller = Seller::where('id', $sellerId)->where('status', 1)->first();
        $sellerPhotos = Photo::where('seller_id', $sellerId)->get();

        return view('website.member-single', compact('seller', 'sellerId', 'sellerPhotos'));
    }
    function sellerProfile(Request $request)
    {
        if (Session::has('sessdata') && Session::get('sessdata')['role'] == 'seller') {
            $sellerId = Session::get('sessdata')['id'];
            $seller = Seller::where('id', $sellerId)->where('status', 1)->first();
            $sellerPhotos = Photo::where('seller_id', $sellerId)->get();
            return view('website.seller-profile', compact('seller', 'sellerId', 'sellerPhotos'));
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
        // $img_url = 'http://localhost/dating/public/website/assets/images/member/home2/01.jpg';
        // // dd($user->update(['image' => $img_url]));
        // if ($request->file('image')) {
        //     // dd($request->file('image'));
        //     $file = $request->file('image');
        //     $filename = 'profile_' . date('Ymd') . $file->getClientOriginalName();
        //     $file->move(public_path('website/assets/profile_pic/'), $filename);
        //     $img_url = URL::asset('public/website/assets/profile_pic') . '/' . $filename;
        // }
        if ($password != '') {
            if ($request->password == $request->confirmpassword) {
                $user->update([
                    'password' => Hash::make($request->password),
                    'name' => $request->name,
                    'birthday' => $request->birthday,
                    'lookingfor' => $request->lookingfor,
                    'gender' => $request->gender,
                    'matrital_status' => $request->matrital_status,
                    // 'image' => $img_url,
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
                // 'image' => $img_url,
                'city' => $request->city,
            ]);
        }
        return redirect()->back()->with('success', 'Update successfully!');
    }

    function sellerProfileEdit(Request $request)
    {
        $seller = Seller::where('id', $request->sellerId)->first();
        $password = $request->password;
        // $img_url = $seller->profile_photo;
        // if ($request->file('image')) {
        //     $file = $request->file('image');
        //     $filename = 'profile_' . date('Ymd') . $file->getClientOriginalName();
        //     $file->move(public_path('website/assets/profile_pic/'), $filename);
        //     $img_url = URL::asset('public/website/assets/profile_pic') . '/' . $filename;
        // }
        if ($password != '') {
            if ($request->password == $request->confirmpassword) {
                $seller->update([
                    'password' => Hash::make($request->password),
                    'name' => $request->name,
                    'birthday' => $request->birthday,
                    // 'image' => $img_url,
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
                // 'image' => $img_url,
                'gender' => $request->gender,
                'price' => $request->price,
                'city' => $request->address,
            ]);
        }
        return redirect()->back()->with('success', 'Update successfully!');
    }

    function sellerPhotoUpdate(Request $request)
    {
        foreach ($request->photos as $item) {
            if ($item) {
                $file = $item;
                $filename = 'photos_' . date('Ymd') . $file->getClientOriginalName();
                $file->move(public_path('website/assets/photos/'), $filename);
                $img_url = URL::asset('public/website/assets/photos') . '/' . $filename;

                Photo::create(['photo_path' => $img_url, 'seller_id' => $request->sellerId]);
            }
        }
        return redirect()->back()->with('success', 'Added successfully!');
    }
    public function pricingTable()
    {
        $months = PricingTable::where('pricing_type', 'Month')->first();
        $years = PricingTable::where('pricing_type', 'Year')->first();

        return view('website.pricingTable', compact('months', 'years'));
    }

    public function pricingSubscriptionUpload(Request $request)
    {
        if (Session::has('sessdata') && Session::get('sessdata')['role'] == 'user') {
            $data = $request->all();
            $data['user_id'] = Session::get('sessdata')['id'];
            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = 'profile_' . date('Ymd') . $file->getClientOriginalName();
                $file->move(public_path('website/assets/subscription/'), $filename);
                $data['image'] = URL::asset('public/website/assets/subscription') . '/' . $filename;
            }
            SubscriptionUpload::create($data);
            return redirect()->back()->with('success', 'Submited successfully!');
        } else {
            return Redirect::to('login');
        }
    }

    public function profileUpdate(Request $request)
    {
        $data = [];
        ini_set('upload_max_filesize', '50M');
        ini_set('post_max_size', '55M');
        if ($request->file('profile_photo')) {
            $file = $request->file('profile_photo');
            $filename = 'profile_' . date('Ymd') . $file->getClientOriginalName();
            $file->move(public_path('website/assets/profile_pic/'), $filename);
            $data['profile_photo'] = URL::asset('public/website/assets/profile_pic') . '/' . $filename;
        }
        if ($request->file('cover_photo')) {
            $file = $request->file('cover_photo');
            $filename = 'profile_' . date('Ymd') . $file->getClientOriginalName();
            $file->move(public_path('website/assets/profile_pic/'), $filename);
            $data['cover_photo'] = URL::asset('public/website/assets/profile_pic') . '/' . $filename;
        }
        if (Session::has('sessdata') && Session::get('sessdata')['role'] == 'user') {
            User::where('id', Session::get('sessdata')['id'])->update($data);
        } else {
            Seller::where('id', Session::get('sessdata')['id'])->update($data);
        }

        return redirect()->back()->with('success', 'Uploaded successfully!');
    }
}
