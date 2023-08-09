<?php

use App\Models\User;


function getSubscription()
{
    return User::where('id', Session::get('sessdata')['id'])->first()->pricing_table;
}

function ageCalc($from)
{
    return date_diff(date_create($from), date_create('today'))->y;
}
