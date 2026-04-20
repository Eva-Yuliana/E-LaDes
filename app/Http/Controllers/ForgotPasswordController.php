<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Tampilkan halaman lupa password
    |--------------------------------------------------------------------------
    */
    public function showForgot()
    {
        return view('login.lupapass');
    }

    /*
    |--------------------------------------------------------------------------
    | Cek email user
    |--------------------------------------------------------------------------
    */
    public function checkEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->with('error', 'Email tidak ditemukan');
        }

        return redirect()->route('password.reset', $user->email);
    }

    /*
    |--------------------------------------------------------------------------
    | Tampilkan halaman reset password
    |--------------------------------------------------------------------------
    */
    public function showReset($email)
    {
        return view('login.resetpass', compact('email'));
    }

    /*
    |--------------------------------------------------------------------------
    | Proses reset password
    |--------------------------------------------------------------------------
    */
    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed'
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->with('error', 'User tidak ditemukan');
        }

        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('login')
            ->with('success', 'Password berhasil diubah!');
    }
}