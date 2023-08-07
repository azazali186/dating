<?php
use App\Models\User;


function getSubscription(){
    return User::where('id', Session::get('sessdata')['id'])->first()->pricing_table;
}

