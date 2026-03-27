<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|lowercase|unique:users',
            'password' => 'required|confirmed',
        ]);

        $user = User::create($data);

        if ($user) {
            return redirect()->route('signin')
                ->with('status', 'Data stored Successfully');
        }
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/signin');
    }
}
