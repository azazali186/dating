<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\PricingTable;
use App\Models\Seller;
use App\Models\SubscriptionUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use DB;
use App\Models\User;
use Carbon\Carbon;
use Validator;
use Session;

class AdminSellerController extends Controller
{
    public function listseller(Request $request)
    {
        $query = Seller::select('*')->orderBy('id', 'DESC');

        $query->when($request->dates, function ($query) use ($request) {
            if ($request->dates[0] == $request->dates[1]) {
                $query->whereDate('created_at', Carbon::parse($request->dates[0])->format('Y-m-d'));
            } else {
                $query->whereBetween('created_at', [
                    Carbon::parse($request->dates[0])->startOfDay(),
                    Carbon::parse($request->dates[1])->endOfDay(),
                ]);
            }
        });

        $users = $query->get()->toArray();

        Seller::query()->update(['show' => 1]);

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

        return back()->with('success', 'Updated successfully!');
    }

    public function pricingSubscription(Request $request)
    {
        $pricingTable = SubscriptionUpload::with(['user', 'pricingTable'])->get();
        // return $pricingTable;

        SubscriptionUpload::query()->update(['show' => 1]);

        return view('admin.seller.pricingSubscription', compact('pricingTable'));
    }

    public function pricingSubscriptionApprove(Request $request)
    {
        $data = [];
        $pricingTable = SubscriptionUpload::with(['pricingTable'])->find($request->id);

        $data['status'] =  '1';
        $data['join_date'] =  Carbon::now();

        if ($pricingTable->pricingTable->pricing_type == '3month') {
            $data['expiry_date'] = Carbon::now()->addMonth(3);
        } elseif ($pricingTable->pricingTable->pricing_type == '1month') {
            $data['expiry_date'] = Carbon::now()->addMonth();
        } else {
            $data['expiry_date'] = Carbon::now()->addDay(7);
        }

        // $data['expiry_date_7days'] = Carbon::now()->addDay(7);
        // $data['expiry_date_1month'] = Carbon::now()->addMonth();
        // $data['expiry_date_3month'] = Carbon::now()->addMonth(3);
        // dd($data);
        $pricingTable->update($data);

        return back()->with('success', 'Approved successfully!');
    }
}
