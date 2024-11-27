<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function register(Request $request)
{
    $validated = $request->validate([
        'full_name' => 'required|string|max:255',
        'username' => 'required|string|unique:users|max:255',
        'email' => 'required|string|email|unique:users|max:255',
        'password' => 'required|string|min:8|confirmed'
    ]);

    $user = User::create([
        'full_name' => $validated['full_name'],
        'username' => $validated['username'],
        'email' => $validated['email'],
        'password' => Hash::make($validated['password'])
    ]);

    Auth::login($user);
    
    session()->flash('success', 'Registration successful! Welcome to your profile.');
    
    // Clear the session data
    $request->session()->forget(['_old_input']);

    
    return redirect()->route('profile');
}

public function profile()
{
    $user = Auth::user();
    return view('profile', compact('user'));
}
    public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|string|email',  // Use 'email' instead of 'username'
        'password' => 'required|string'
    ]);

    // Attempt login using email address
    if (Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['password']])) {
        return redirect()->intended('home');
    }

    return back()->withErrors([
        'email' => 'Invalid credentials',
    ]);
}

   

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }

   /* public function account()
    {
        return view('account', ['user' => Auth::user()]);
    }*/

}
