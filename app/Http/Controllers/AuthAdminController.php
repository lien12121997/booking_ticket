<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use Validator;
use Session;


class AuthAdminController extends Controller
{
    //Admin Login
    public function loginAdmin()
    {
        return view('admin/login');   
    }

    public function postloginAdmin(Request $request)
    {
        // Kiểm tra dữ liệu nhập vào
        $rules = [
            'email' =>'required|email',
            'password' => 'required|min:6'
        ];
        $messages = [
            'email.required' => 'Email là trường bắt buộc',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Mật khẩu là trường bắt buộc',
            'password.min' => 'Mật khẩu phải chứa ít nhất 8 ký tự',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        
        if ($validator->fails()) {
            return redirect('login')->withErrors($validator)->withInput();
        } 
        else 
        {
            $email = $request -> email;
            $password = $request -> password;
            $role = User::select('role')->where('email', $email)->first();
     
            if(Auth::attempt(['email' => $email, 'password' => $password])) {
                if($role->role == 1) {
                    return redirect('admin/home');
                }
                else if($role->role == 0) {
                    return redirect('home');
                }
            } 
            else {
                Session::flash('error', 'Email hoặc Mật Khẩu không đúng!');
                return redirect('admin/login');
            }
        }
    }

    //Create Admin
    public function createAdmin() {
        return view('admin/create');
    }

    public function storeAdmin(Request $request) 
    {  
        $admin = new User();
        $admin -> name = $request -> name;
        $admin -> email = $request -> email;
        $admin -> password = $request -> password;
        $admin -> role = 1;
        $admin -> save();
        return redirect('admin/home');
    }

    //Logout
    public function logoutAdmin() 
    {
        auth()->logout();
        session()->flush();
        return redirect('admin/login');
    }

}
