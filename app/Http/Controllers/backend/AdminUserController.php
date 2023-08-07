<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use DB;
use App\Models\User;
use Validator;

class AdminUserController extends Controller
{
    //
    public function list() {
         $users =User::select('*')->orderBy('id', 'DESC')->get()->toArray();
         // echo "<pre>";
         // print_r($users);
         // die;
         return view('admin.user.user-list')->with(array('users'=>$users));                           
    }


    public function new( $end = null){ 
    $user=[];
    if(!empty($end)){
        $user= User::select('*')->where('id', base64_decode($end))->get()->toArray();

         if(!empty($user)){
             $user =$user['0']; 
         }else{
            return view('notfound'); 
         }  
    }                        
         // echo "<pre>";  print_r($user);  die;
        return view('admin.user.user-form', compact('user'));
    }

        public function save(Request $request)
          {  
           //  echo "<pre>";   print_r($request->all());
           // die('===========');
            $params = $request->all();
            unset($params['_token']);
            $params['id'] = $request->id;
            //$params['role'] = 'user';
            if(isset($request->id) && $request->id != ''){  
                  
                   $user = User::select('*')->where('id', $request->id)->get()->first();
                //      echo "<pre>";   print_r($user);
                // die('===========');
                   if(!empty($user)) {
                //        echo "<pre>";   print_r($params);
                // die('===========');
                           unset($params['id']);
                             
                           User::where('id', $request->id)->update($params);
                       
                        return redirect()->to('admincon/allusers')->with('success','User details updated successfull!y');
                   }else{
                        return back()->with('error','Updation error!');
                   }
            }else{
                $request->validate([
                    'phone' => 'unique:users',
                    ]);
                date_default_timezone_set('Asia/Kolkata');
                // Prints the day, date, month, year, time, AM or PM
                $params['created_date'] = date("j M Y h:i A"); 
                $this->appRepository->savedata($params);
                return redirect()->to('admincon/allusers')->with('success','New user Added successfully!');
            }        
        }

    public function delete(Request $request){

        // echo "ghjkl";
        // die('========');
      // $user = User::select('*')->where('id', $request->id)->get()->first();
             
            $params = $request->all();
            unset($params['_token']);
            $user = User::select('*')->where('id', $request->id)->get()->first();
            $params['id'] = $request->id;
             $id = $request->id;
             // print_r($id);
             //  die('ooooooo');
             unset($params['id']);
                             
          User::where('id', $request->id)->delete($params);

          //    print_r($d);
          // die('========');
       // DB::table('users')->whereIn('id', $request->id)->delete();
        //DB::table('users')->where('id', $request->id)->delete($id);
        return back()->with('success','Successfully deleted.!!');
    }

}
