<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use Validator;
use Illuminate\Support\MessageBag;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**return void
     */
    public function getRegister()
    {
        return view('auth.register');
    }


    public function postRegister(Request $request)
    {
        $rules = [
            'name' =>'required|min:3',
            'email' =>'required|email',
            'password' => 'required|min:6|confirmed'
        ];
        $message = [
            'name.required' => 'Bạn chưa nhập tên',
            'name.min' => 'Tên phải chứa ít nhất 3 ký tự',
            'email.required' => 'Bạn chưa nhập email',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Bạn chưa nhập mật khẩu',
            'password.min' => 'Mật khẩu phải chứa ít nhất 6 ký tự',
        ];

        $users = new User();
        $users -> name = $request -> name;
        $users -> email = $request -> email;
        $users -> password = $request -> password;
        $users -> save();
        return redirect('login');

    }
    

    public function getLogin()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        $rules = [
            'email' =>'required|email',
            'password' => 'required|min:6'
        ];
        $message = [
            'email.required' => 'Bạn chưa nhập email',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Bạn chưa nhập mật khẩu',
            'password.min' => 'Mật khẩu phải chứa ít nhất 6 ký tự',
        ];

        $validator = Validator::make($request->all(), $rules, $message);
        if($validator->fails()){
            return response()->json([
                'error' => true,
                'message' => $validator->errors()
            ],200);
        }

        else{dd($request -> email,$request -> password);
            if(Auth::attempt(['email'=> $request -> email,'password' => $request -> password]))
                {
                    return response()->json([
                        'error' => false,
                        'message' => 'Success'
                    ],200);
                    // return redirect('list');
                }
                else
                {
                    $errors = new MessageBag(['errorLogin'=> 'email hoặc password không đúng']);

                    return response()->json([
                        'error' => false,
                        'message' => $errors
                    ],200);
                    //return redirect('user/login');
                }
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('login');
    }
}
