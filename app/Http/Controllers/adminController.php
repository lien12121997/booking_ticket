<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Guard;
use App\Admin;
use App\User;
use App\Products;
use App\product_image;

class adminController extends Controller
{
    //Sign up Register
    public function index()
    {
        $admin = Admin::all();
    	return view('admin/home', compact('admin'));
    }

    //Profile Admin
    public function profile($id)
    {
        $admin = Admin::find($id);
        return view('admin/profile', ['admin'=>$admin]);
    }

    //Logout
    public function logoutAdmin() 
    {
        auth()->logout();
        session()->flush();
        return redirect('login_admin');
    }

    //List Users
    public function listUser()
    {
    	$User = User::all();
    	return view('admin/user/listUser',['User'=>$User]);
    }

     //List Profile
    public function userProfile($id)
    {
    	$User = User::find($id);
    	return view('admin/user/user_detail',['User'=>$User]);
    }

}
