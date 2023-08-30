<?php

use App\Models\CounterVisit;
use App\Models\Seller;
use App\Models\SubscriptionUpload;
use App\Models\User;
use Carbon\Carbon;

function getSubscription()
{
    // return User::where('id', Session::get('sessdata')['id'])->first()->pricing_table;
    return true;
}

function ageCalc($from)
{
    return date_diff(date_create($from), date_create('today'))->y;
}

function dashboardData()
{
    $data['allUser'] = User::count();
    $data['allSeller'] = Seller::count();
    $data['allEarning'] = SubscriptionUpload::with(['pricingTable'])->where('status', '1')->get()->sum('pricingTable.pricing');

    return $data;
}

if (!function_exists('getCountVisit')) {
    function getCountVisit($sellerId)
    {
        $ip =  $_SERVER['REMOTE_ADDR'];
        if (!CounterVisit::whereDay('created_at', now()->day)->where('ip_address', $ip)->where('seller_id', $sellerId)->exists()) {
            $visitor = CounterVisit::Create(['ip_address' => $ip, 'seller_id' => $sellerId]);
            $visitor->save();
        }
    }
}

if (!function_exists('getVisitCounts')) {
    function getVisitCounts($sellerId)
    {
        return CounterVisit::where('seller_id', $sellerId)->count();
    }
}
if (!function_exists('getChartData')) {
    function getChartData($sellerId)
    {
        // dd($sellerId);
        $counterVisit = CounterVisit::where('seller_id', $sellerId)
            ->select(\DB::raw("COUNT(*) as count"), 'counter_visits.created_at')
            ->whereYear('created_at', date('Y'))
            ->groupBy(\DB::raw("Day(created_at)"))
            ->get();

        $data = [];
        foreach ($counterVisit as $item) {
            $newData = $item->created_at->getTimestampMs();
            array_push($data, [$newData, $item->count]);
        }
        return $data;
    }
}

function dashboardCount()
{
    $data['allUser'] = User::where('show', 0)->count();
    $data['allSeller'] = Seller::where('show', 0)->count();
    $data['allEarning'] = SubscriptionUpload::where('show', 0)->count();

    return $data;
}
