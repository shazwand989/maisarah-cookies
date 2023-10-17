<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class StaffController extends AuthController
{

    public function __construct()
    {
        // Check if the authenticated user has the 'admin' role
        $this->middleware(function ($request, $next) {
            if (Auth::check() && Auth::user()->role !== 'admin') {
                // Redirect to a different page if the user is not an admin
                return redirect('/login')->with('error', 'Unauthorized access');
            }
            return $next($request);
        });
    }
    public function index()
    {
        // dd($user);
        return view('staff.index');
    }
}
