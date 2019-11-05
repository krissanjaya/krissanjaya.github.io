<?php

namespace App\Http\Controllers\Auth;

use App\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = '/';
    
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'username';
    }

    public function login(Request $request){
        $this->validate($request, [
            'admin_username'    => 'required',
            'admin_password'    => 'required'
        ]);

        $userdata = array(
            'admin_username'    => $request->admin_username,
            'password'          => $request->admin_password
        );

        $cek_active = Admin::where('admin_username', $request->admin_username)->where('admin_active',1)->first();

        if($cek_active){
            if(Auth::attempt($userdata)){
                if (Auth::check())
                {   
                    $update = Admin::find($cek_active->admin_id);
                    $update -> admin_logged_in = date('Y-m-d H:i:s');
                    $update -> save();

                    return redirect()->route('home');
                }else{
                    return "salah";
                }
            }else{
                $response_fail = "Wrong username or password";
                return redirect()->route('login')->with(['response_fail' => $response_fail]);
            }
        }else{
            $response_fail = "Your status is non-active or not registered";
            return redirect()->route('login')->with(['response_fail' => $response_fail]);
        }
        
    }

    public function logout(Request $request){
        if(Auth::check()){
            Auth::logout();
            $request->session()->invalidate();
            return redirect('/login');
        }else{
            return "gagal";
        }
    }
}
