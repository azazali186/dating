<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\PricingTable;
use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use DB;
use App\Models\User;
use Validator;

class AdminSellerController extends Controller
{
    //

    public function listseller()
    {
        $users = Seller::select('*')->orderBy('id', 'DESC')->get()->toArray();
        // echo "<pre>";
        // print_r($users);
        // die;
        return view('admin.seller.seller-list')->with(array('users' => $users));
    }

    public function pricingConfig(Request $request)
    {
        $pricingTable = PricingTable::get();
        return view('admin.seller.pricing-config-page', compact('pricingTable'));
    }
    public function priceUpdate(Request $request)
    {
        $data = $request->all();
        $pricingTable = PricingTable::find($request->slug);
        if ($request->file('qr_image')) {
            $file = $request->file('qr_image');
            $filename = 'profile_' . date('Ymd') . $file->getClientOriginalName();
            $file->move(public_path('website/photos/'), $filename);
            $data['qr_image'] = URL::asset('public/website/photos') . '/' . $filename;
        }
        $pricingTable->update($data);

        return back()->with('success', 'Updation error!');
    }
}
