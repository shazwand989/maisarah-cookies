<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (Auth::check() && Auth::user()->role !== 'user') {
                // Redirect to a different page if the user is not an admin
                return redirect('/login')->with('error', 'Unauthorized access');
            }
            return $next($request);
        });
    }

    public function index()
    {
        return view('customer.index');
    }
}
