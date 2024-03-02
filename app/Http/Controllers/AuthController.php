<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function register()
    {
        return view('landingPage.register');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'role' => 'required|in:user'
        ]);

        $data = [
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'role' => $validatedData['role']
        ];

        User::create($data);
        return redirect('/login');
    }

    public function login()
    {
        return view('landingPage.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
       
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();

            if ($user->role == 'admin') {
                return redirect()->intended('/dashboard');
            }elseif($user->role == 'user'){
                return redirect()->intended('/');
            }
        }
        return back()->with('loginError', 'Login Failed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->Session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
