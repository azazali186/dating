<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Session;
use DB;

class AdminController extends Controller
{
    //
     public function adminLogin(Request $request){



              // echo"ghjk";
              // die('====');
             $email = $request->input('email');
             $password = $request->input('password');

              $validateUser = Validator::make($request->all(), 
            [
               'email' => 'required|string|email|unique:users',
               'password' => [
                            'required',
                            'string',
                            'min:8',
                            'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/',
                            ],
            ]);

                if($validateUser->fails()){
                     return redirect()->back()->withErrors($validateUser)->withInput();
                }

             $user =DB::table('admin')->where(['email'=>$email])->first();
             if(!empty($user)){
                     // print_r($user);
                     //  die('====');
                     if (Hash::check($request->password, $user->password)) {
                        $adminsesion=array(
                                        'id' => $user->id,
                                        'email' => $user->email,
                                     );
                          $request->session()->put('adminsesion', $adminsesion);
                       return redirect('admincon/dashboard')->withsuccess('Login Successfully!');  

                        }else{
                             return back()->with('warning', 'Invalid Email or Password!');
                        }
                    }


   }

    public function logout(){
       
                   // echo "dbhjvd";
                   // die('========');
                 Session::flush();
                return redirect('/admincon')->withsuccess('LogOut Successfully !');
    }
}
