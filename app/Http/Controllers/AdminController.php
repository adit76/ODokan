<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $totalproducts= Product::where('product_status',1)->get();
      $totalusers=User::get();
        return view('admin.home',compact('totalproducts','totalusers'));
    }

    public function registeredusers(){

      return view('admin.includes.registeredusers');
    }
}
