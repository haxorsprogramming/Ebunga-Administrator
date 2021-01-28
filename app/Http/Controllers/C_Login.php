<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\M_User;

class C_Login extends Controller
{
    public function login_page()
    {
        return view('login.loginpage');
    }

    public function login_proses(Request $request)
    {
      // {'username':username, 'password':password}
      $username = $request -> username;
      $password = $request -> password;
      $totalUser = M_User::where('username', $username) -> count();
      if($totalUser < 1){
        $dr = ['status' => 'no_user'];
      }else{
        $dataUser = M_User::where('username', $username) -> first();
        $passwordUserDb = $dataUser -> password;
        $cekPassword = password_verify($password, $passwordUserDb);
        if($cekPassword == true){
          session(['userLogin' => $username]);
          $dr = ['status' => 'success'];
        }else{
          $dr = ['status' => 'wrong_password'];
        }
      }
      return \Response::json($dr);
    }
}
