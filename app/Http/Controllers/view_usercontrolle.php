<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use App\User;
class view_usercontrolle extends Controller
{
    //  public function view_user()
    // {
    //      // lất tất cả dữ liệu từ database
    //     $result['info'] = DB::table('users') ->get()->toaRray();

    // //  //   echo '<pre>';
    // //  //   print_r($result);
    //     return view('view_user', $result);
    //   //$users = DB::table('users') ->get()->toaRray();

    //   // return view('view_user', ['users' => $users]);    
    // //       //   echo '<pre>';
    // //       //  print_r($users);
    // }
    
    public function edit() {
      if (Auth::user()) {
          $user = User::find(Auth::user()->id);
          if ($user) {
          return view('edit_user')->withUser($user);
          } else {
              return redirect()->back();
          }
      }
  }
    public function update_user(Request $request)
    {
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
}