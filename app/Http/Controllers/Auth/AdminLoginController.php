<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{

    public function __construct()
    {
      $this->middleware('guest:admin')->except('logout');
    }




    public function showLoginForm()
    {
      return view('auth.admin-login');
    }

    public function login(Request $request)
    {
      //Validate the form
      $this->validate($request,[
        'email'=> 'required|email',
        'password' => 'required|min:6'
      ]);

      //Attempt for login
      if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember)){
        //if successful redirect to dashboard
        return redirect()->intended(route('admin.home'));

      }
      //if unsuccessfull return to login form
      return redirect()->back()->with('msg','Your username and password does not match');
    }

    public function logout(){
      Auth::guard('admin')->logout();
      return redirect('/admin/login');
    }
}
