<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    //Login

    public function index()
    {
        return view('login.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
                return redirect()->intended('/profile');
        }
        return back()->with('ERR', 'Gagal Login');

    }

    //Logout

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/login');
    }

    //regis
    public function regis(Request $request)
    {
        User::create([
            'email' => "ibtitk@gmail.com",
            'password' => bcrypt('ibt321') 
        ]);
    }
    
}