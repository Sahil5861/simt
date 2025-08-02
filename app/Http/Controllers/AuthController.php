<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    // Show registration page
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Encrypt password
        ]);

        Auth::login($user);

        return redirect()->route('admin.dashboard');
    }


    public function login_save(Request $request){
        // dd($request->all()); exit;
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => md5($request->password) // Convert password to MD5
        ];

        // dd(md5($request->password), $request->all()); exit;
        
        // Find user manually and check password
        $user = \App\Models\User::where('email', $request->email)->first();

        // dd($user); exit;
        
        if (!$user || !Hash::check($request->password, $user->password)) {
            return redirect()->back()->withErrors(['Invalid credentials']);
        }
        
        // Log in the user manually
        auth()->login($user);
        return redirect()->route('admin.dashboard');
    }


    public function logout(Request $request){

        auth()->logout(); // Logout the user

        $request->session()->invalidate(); // Invalidate the session
        $request->session()->regenerateToken(); // Regenerate CSRF token

        return redirect()->route('home'); // Redirect to login page
    }

}
