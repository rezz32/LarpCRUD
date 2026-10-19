<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register (Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            "password" => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect('/siswa');
    }


    public function login(Request $request)
    {
    if (Auth::attempt($request->only('email','password'))){
        return redirect('/siswa');
    }

    return back()->with("error", "Email atawa Passwordna salah");
 }

    public function logout()
    {
    Auth::logout();
    return redirect('/login');
 }

}