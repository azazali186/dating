<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use DB;
use App\Models\User;
use Validator;

class AdminSellerController extends Controller
{
    //

     public function listseller() {
         $users =User::select('*')->orderBy('id', 'DESC')->get()->toArray();
         // echo "<pre>";
         // print_r($users);
         // die;
         return view('admin.seller.seller-list')->with(array('users'=>$users));                           
    }
}
