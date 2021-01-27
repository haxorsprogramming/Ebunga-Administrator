<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
      $dr = ['status' => $totalUser];
      return \Response::json($dr);
    }
}
