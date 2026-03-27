<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class PasswordResertController extends Controller
{
    public function create()
    {
        return view('auth.forget-password');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users'

        ]);
        $token = Str::random(64);

        DB::table('forget_password')->where('email', $request->email)->delete();
        DB::table('forget_password')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => now(),
            'updated_at' => now()
        ]);


        Mail::send('auth.email', ['token' => $token], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Reset Password');
        });

        return back()->with('status', 'Password reset link sent!');
    }
    public function createResetPassword($token)
    {
        return view('auth.reset-password', ['token' => $token]);
    }

    public function storeResetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ]);

        $updatePassword = DB::table('forget_password')
            ->where([
                'email' => $request->email,
                'token' => $request->token
            ])->first();

        if (! $updatePassword) {
            return "<h1>Password not updated</h1>";
        }

        $user = User::where('email', $request->email)->update(['password' => Hash::make($request->password)]);
        DB::table('forget_password')->where('email', $request->email)->delete();
        return redirect()->route('signin');
    }
}
