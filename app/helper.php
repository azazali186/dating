<?php

use App\Models\Seller;
use App\Models\User;


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
    $data['allEarning'] = '0.00';

    return $data;
}
