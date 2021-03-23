<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use DB;
use App\tickets;

class userController extends Controller
{
    // public function profile($id) {
    //     $user = User::find($id);

    //     if ($user){
    //         return view('user.profile')->withUser($user);
    //     } else {
    //         return redirect()->back;
    //     }

    // }
    // dùng User phải khai báo đỉa chỉ đường dẫn App\User;
    public function edit() {
        if (Auth::user()) {
            $user = User::find(Auth::user()->id);
            if ($user) {
            return view('user.edit')->withUser($user);
            } else {
                return redirect()->back();
            }
        }
    }
    public function update(Request $request) {
        $user = User::find(Auth::user()->id);
        if($user) {
            $validate = null;
            if (Auth::user()->email === $request['email']){
                $validate = $request->validate([
                    'name' => 'required|min:2',
                    'email' => 'required|email'
                ]);
            } else {
                $validate = $request->validate([
                    'name' => 'required|min:2',
                    'email' => 'required|email|unique:users'
                ]);
            }
            if ($validate) {
            $user->name = $request ['name'];
            $user->email = $request ['email'];
            $user->address = $request ['address'];
            $user->phone = $request ['phone'];
            $user->gender = $request ['gender'];


            $user->save();
            $request->session()->flash('success', 'Cập nhật thành công!!!');
            return redirect()->back();
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }
    public function passwordEdit() {
        if (Auth::user()) {

            return view('user.password');
            } else {
                return redirect()->back();
            }
    }
    // password_confirmation lấy từ name = password_confirmation where Current password
    // min:7 không nhỏ hơn 7
    // Hash để lưu mật khẩu của người dùng
    // Dùng Hand:: phải khai báo use Illuminate\Support\Facades\Hash;
    public function passwordUpdate(Request $request) {
        $validate = $request->validate([
            'oldPassword' => 'required|min:7',
            'password' => 'required|min:7|required_with:password_confirmation'
        ]);
        $user = User::find(Auth::user()->id);

        if ($user) {
            if (Hash::check($request['oldPassword'],$user->password)&& $validate) {
                $user->password = Hash::make($request ['password']);
                $user->save();

                $request->session()->flash('success', 'Đổi mật khẩu thành công!!!');
                return redirect()->back();
            } else {
                $request->session()->flash('error', 'Đổi mật khẩu thất bại!!!');
                return redirect()->route('password.edit');
            }
        }
    }
    
    public function search(Request $request)
    {
        $show_tickets  = Tickets::with('user','vehicles')->where('pick_up_point', 'like', '%'. $request->key1.'%')->get(); 
          
      
        return view('search_ticket', ['show_tickets' => $show_tickets]);

        // echo '<pre>';
        // print_r($show_tickets);
    }



    public function check1(Request $request)
    {
        



        if (Auth::user()) {
            $user = User::find(Auth::user()->id);
            if ($user) {
            return view('check-test')->withUser($user);
            } else {
                return redirect()->back();
            }
        }

        // echo '<pre>';
        // print_r($show_tickets);
        // return view('check-test', ['show_tickets' => $show_tickets]);
        
    }
    public function check2(Request $request) 
        {
            if($request->isMethod('post')){
            $user_id  =  $request->input("users_id");
            $tickets  =  new tickets();
            $tickets->users_id=$request->$user_id;
            $tickets->save();
            }
            return view('test1');
        }
}
