<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('auth.register');
    }

    public function register()
    {
        $data = request()->validate([
            'name' => 'required|string|max:55|min:3',
            'email' => 'required|string|email|max:55|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        //@dd($data);

        $data['password'] = Hash::make($data['password']);

        $user = User::create($data);

        session(['user_id', $user->id]);

        return to_route('expenses.index');

    }

    public function showLogin()
    {
        return view('auth.login');
    }

    public function login()
    {
        $data = request()->validate([
            'email' => 'required|string|email|max:55',
            'password' => 'required|string|min:6',
        ]);

        $user = User::where('email', $data['email'])->first();

        if (!$user || !Hash::check($data['password'], $user->password)) {
            return back()->withErrors(['email' => 'Invalid credentials']);
        }

        session(['user_id' => $user->id]);

        return to_route('expenses.index');
    }

    public function logout()
    {
        session()->forget('user_id');

        return to_route('login');
    }

}
