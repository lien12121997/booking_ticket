<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\User;
use App\Phim;
use App\Lichchieu;
use App\Cachieu;
use App\Chatluong;
use App\Ve;
use App\Vct;
use App\Tintuc;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phim = DB::table('phim')->where('tinh_trang','=', '1')->get();
        $film = DB::table('phim')->where('tinh_trang','=', '0')->get();
        $tintuc = Tintuc::all();
        return view('home', compact('phim','film','tintuc'));
    }

    public function item($id)
    {
        $phim = Phim::find($id);
        $lichchieu = Lichchieu::all();
        $phim = DB::table('phim')->where('phim.id','=', $id)->get();
        $lichchieu = DB::table('phim')->join('lich_chieu','lich_chieu.id_phim','=','phim.id')
                                 ->select('phim.*','lich_chieu.*')
                                 ->where('phim.id','=', $id)->get();
        return view('fontend.item', compact('phim','lichchieu'));
    }

    public function booking($id)
    {
        $lichchieu = Lichchieu::find($id);
        $cachieu = Cachieu::all();
        $users = Auth::user();
        $phim = Phim::all();
        $chatluong = Chatluong::all();
        $datve = DB::table('lich_chieu')->join('phim','phim.id','=','lich_chieu.id_phim')
                                ->join('ca_chieu','ca_chieu.id','=','lich_chieu.id_cachieu')
                                ->join('chat_luong','chat_luong.id','=','lich_chieu.id_chatluong')
                                ->select('phim.*','lich_chieu.*','ca_chieu.*','chat_luong.*')
                                ->where('lich_chieu.id','=', $id)->get();
        return view('fontend.booking', compact('cachieu','users','phim','lichchieu','chatluong','datve'));
    }

    public function postInsertBooking(Request $req)
    {
        $ve = new Ve();
        $ve -> id_user = $req -> id_user;
        $ve -> id_lichchieu = $req -> id_lichchieu;
        $ve -> qty = $req -> qty;
        $ve -> price = $req -> price;
        $ve -> save();
        foreach ($req -> so_ghe as $ghe) {
            $vct = new Vct();
            $vct -> id_ve = $ve -> id;
            $vct -> id_lichchieu = $req -> id_lichchieu;
            $vct -> so_ghe = $ghe;
            $vct -> save();
        }
        return redirect('home');

    }

    public function ajaxBooking($id)
    {
        $lichchieu = Lichchieu::find($id);
        $book = DB::table('vct')->join('lich_chieu','vct.id_lichchieu','=','lich_chieu.id')
                                ->where('lich_chieu.id','=', $id)->pluck('vct.so_ghe');
        $ghe = json_encode($book);

        return Response::json($ghe, 200);
    }

    public function user(Request $request, $id)
    {
        $i = 1;
        $users = Auth::user();
        $transactions = DB::table('ve', 'lich_chieu')
            ->join('vct','vct.id_ve','=','ve.id')
            ->join('lich_chieu','lich_chieu.id','=','ve.id_lichchieu')    
            ->join('chat_luong','chat_luong.id','=','lich_chieu.id_chatluong')
            ->join('phim','phim.id','=','lich_chieu.id_phim')
            ->join('phong_chieu','phong_chieu.id','=','lich_chieu.id_phongchieu')
            ->join('ca_chieu','ca_chieu.id','=','lich_chieu.id_cachieu')
            ->select('ve.*','lich_chieu.*','vct.so_ghe','chat_luong.name as chatluong','phim.img', 'phim.name as phim','phong_chieu.name as phongchieu','ca_chieu.*')
            ->where('ve.id_user','=', $id)->get();

        return view('users.profile',compact('users', 'transactions','i'));
    }

    public function getUpdateUser($id)
    {
        $users=User::find($id);
        return view('users.update',['users'=>$users]);
    }

    public function postUpdateUser(Request $request, $id)
    {
        $users  = User::find($id);
        $users -> name = $request -> name;
        if($request -> hasFile('file')){
            $file = $request -> file;
            $file_name = $file -> getClientOriginalName();
            $users -> avar = $file_name;
            $file -> move('images', $file_name);
        }
        $users -> dob = $request -> dob;
        $users -> phone = $request -> phone;
        $users -> address = $request -> address;
        $users -> email = $request -> email;
        $users -> lat = $request -> lat;
        $users -> lng = $request -> lng;
        $users -> save();
        return redirect('profile/'.$id);
    }

    //Update Password
     public function getUpdatePass($id)
    {
        $users = User::find($id);
        return view('users.updatepass',['users'=>$users]);
    }


    public function postUpdatePass(Request $request, $id)
    {
        $this -> validate( $request,
            [
                'passwordOld' => 'required',
                'passwordNew' => 'required|min:6',
            ],
            [
                'passwordOld.required' => 'Please enter the Current Password!',
                'passwordNew.required' => 'Please enter the New Password!',
                'passwordNew.min' => 'Passwords must contain at least 6 characters',
            ]); 

        if(!(Hash::check($request -> passwordOld, User::find($id) -> password )))
        {
            return redirect('updatePass/'.$id) -> with('error','Your current password does not matches with the password you provided. Please try again.');
        }
        else if (strcmp($request -> passwordOld, $request -> passwordNew) == 0) 
        {
            return redirect('updatePass/'.$id) -> with('error', 'New Password cannot be same as your current password. Please choose a different password.');
        }
        
        $users = User::find($id);
        $users -> password =  bcrypt($request -> passwordNew);
        $users -> save();
        return redirect('profile/'.$id);
    }

    //Contact Home
    public function getContact()
    {
        return view('fontend.contact');
    }

    public function postContact(Request $request)
    {
        $this -> validate( $request,
            [
                'email' => 'required|email',
            ],
            [
                'email.required' => 'Please enter the New Email!',
                'email.email' => 'Your email address is invalid. Please enter a valid address!',
            ]); 

        $this->data['firstName'] = $request -> firstName;
        $this->data['lastName'] = $request -> lastName;
        $this->data['phone'] = $request -> phone;
        $this->data['messagess'] = $request -> message;

        $email = $request -> email;
        Mail::send('fontend.message_contact', $this->data, function ($message) use ($email) {
            $message->from($email)->subject('Thư Điện Tử');
            $message->to('lannhi2208b@gmail.com');
        });
        return redirect('contact')-> with('successfull', 'Gửi mail Thành công!');
    }
}