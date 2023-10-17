<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validate the user's input
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            // check if user is admin
            if (auth()->user()->role == 'admin') {
                // redirect to admin dashboard
                return redirect()->intended('/staff');
            } else if (auth()->user()->role == 'user') {
                // redirect to user dashboard
                return redirect()->intended('/');
            }
        } else {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }


        // Redirect to the login page
        return redirect('/login');
    }

    public function logout()
    {
        // Log the user out
        auth()->logout();

        // Redirect to the login page
        return redirect('/login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // Validate the user's input
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8',
            'password_confirmation' => 'required',
        ]);

        // Create and save the user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // Log the user in
        auth()->login($user);

        // Redirect to the home page
        return redirect('/');
    }
}
