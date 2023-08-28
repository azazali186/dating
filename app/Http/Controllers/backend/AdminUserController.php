<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use DB;
use App\Models\User;
use Validator;

class AdminUserController extends Controller
{
    //
    public function list()
    {
        $users = User::select('*')->orderBy('id', 'DESC')->get()->toArray();
        // echo "<pre>";
        // print_r($users);
        // die;
        return view('admin.user.user-list')->with(array('users' => $users));
    }


    public function new($end = null)
    {
        $user = [];
        if (!empty($end)) {
            $user = User::select('*')->where('id', base64_decode($end))->get()->toArray();

            if (!empty($user)) {
                $user = $user['0'];
            } else {
                return view('notfound');
            }
        }
        // echo "<pre>";  print_r($user);  die;
        return view('admin.user.user-form', compact('user','end'));
    }

    public function save(Request $request)
    {
        //  echo "<pre>";   print_r($request->all());
        // die('===========');
        $params = $request->all();
        unset($params['_token']);
        $params['id'] = $request->id;
        //$params['role'] = 'user';
        if (isset($request->id) && $request->id != '') {

            $user = User::select('*')->where('id', $request->id)->get()->first();
            //      echo "<pre>";   print_r($user);
            // die('===========');
            if (!empty($user)) {
                //        echo "<pre>";   print_r($params);
                // die('===========');
                unset($params['id']);

                User::where('id', $request->id)->update($params);

                return redirect()->to('admincon/allusers')->with('success', 'User details updated successfully!');
            } else {
                return back()->with('error', 'Updation error!');
            }
        } else {
            $request->validate([
                'phone' => 'unique:users',
            ]);
            date_default_timezone_set('Asia/Kolkata');
            // Prints the day, date, month, year, time, AM or PM
            $params['created_date'] = date("j M Y h:i A");
            $this->appRepository->savedata($params);
            return redirect()->to('admincon/allusers')->with('success', 'New user Added successfully!');
        }
    }

    public function delete(Request $request)
    {
        User::where('id', $request->id)->delete();

        return back()->with('success', 'Successfully deleted.!!');
    }

    public function deleteSeller(Request $request)
    {
        Seller::where('id', $request->id)->delete();

        return back()->with('success', 'Successfully deleted.!!');
    }

    public function userChangeStatus(User $user, Request $request)
    {
        $status = 0;
        if($request->status == 1){
            $status = 1;
        }
        // dd($user, $request->all());
        $user->update(['status' => $status]);

        return back()->with('success', 'Successfully Changed.!!');
    }
}
