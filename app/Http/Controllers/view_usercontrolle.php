<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;

class view_usercontrolle extends Controller
{
     public function view_user()
    {
         // lất tất cả dữ liệu từ database
        $result['info'] = DB::table('users') ->get()->toaRray();

    //  //   echo '<pre>';
    //  //   print_r($result);
        return view('view_user', $result);
      //$users = DB::table('users') ->get()->toaRray();

      // return view('view_user', ['users' => $users]);    
    //       //   echo '<pre>';
    //       //  print_r($users);
    }
    




    public function edit_user(Request $request)
    {
      //lấy dữ liệu theo id
      $result['info'] = DB::table('users')->where('id', $request->id)->get();
      
      return view('edit_user', $result); 
      
    }
    public function update_user(Request $request)
    {
      // echo $request ->name;
      // echo $request ->id;
       DB::table('users')->where('id', $request->id)
       ->update([ 'name'=>$request->name, 
                  'email'=>$request->email,
                  'phone'=>$request->phone,
                  'address'=>$request->address,
                  'gender'=>$request->gender
                ]);
       return view('home');
    }
}