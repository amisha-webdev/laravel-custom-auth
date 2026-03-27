<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function create()
    {
        return view('auth.login');
    }
    public function store(Request $request)
    {

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'

        ]);
        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard')
                ->with('status', 'Logged In Successfully');
        } else {
            return redirect()->route('signin');
        }
    }
}
