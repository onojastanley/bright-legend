<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
     public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification = array(
            'message' => 'User Logout Successfully',
            'alert-type' => 'success'
        );

        return redirect('/admin/login')->with($notification);
    } // End Method

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
                 $notification = array(
            'message' => 'User Login Successfully',
            'alert-type' => 'success'
        );
            return redirect()->intended('dashboard')->with($notification);
        }
        $notification = array(
            'message' => 'User Login Failed',
            'alert-type' => 'error'
        );
        return back()->with($notification);
    }

    public function loginForm(){
    	return view('auth.admin_login', ['guard' => 'admin']);
    }

 



}
