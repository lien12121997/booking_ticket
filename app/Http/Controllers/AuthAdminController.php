<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Admin;
use Validator;
use Auth;


class AuthAdminController extends Controller
{
    //Admin Login
    public function loginAdmin()
    {
        return view('admin/login');   
    }

    public function postloginAdmin(Request $request)
    {
        $rules = [
            'useradmin' =>'required',
            'password' => 'required|min:6'
        ];
        $messages = [
            'useradmin.required' => 'User is not empty',
            'password.required' => 'Password is not empty',
            'password.min' => 'Your password must be at least 6 characters',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) 
        {
            return response()->json([
                    'error' => true,
                    'message' => $validator->errors()
                ], 200);
        } 
        else 
        {
            $name = $request->input('useradmin');
            $password = $request->input('password');

            if( Auth::guard('admin')->attempt(['name' => $name, 'password' =>$password], $request->has('remember')))    
            {
                //$session = session() -> put('name', $request -> useradmin);
                $admin = Auth::guard('admin');
                return response()->json([
                    'error' => false,
                    'message' => 'success'
                ], 200);
            } 
            else 
            {
                $errors = new MessageBag(['errorlogin' => 'Username or Password incorrect']);
                return response()->json([
                    'error' => true,
                    'message' => $errors
                ], 200);
            }
        }
    }


    //Create Admin
    public function create()
    {
        return view('admin/create');
    }

    public function store(Request $request)
    {  
        $admin = new Admin();
        $admin -> name = $request -> name;
        $admin -> email = $request -> email;
        $admin -> password =  bcrypt($request -> password);
        $admin -> save();
        //$session = session() -> put('name', $request -> name);
        $admin = Auth::guard('admin');
        return redirect('admin/admin');
    }

}
