<?php

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
    $data['allUser'] = 5;
    $data['allSeller'] = 15;
    $data['allEarning'] = 15;
    return $data;
}
