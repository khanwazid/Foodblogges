<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;


class UserController extends Controller
{
    public function register(Request $request)
    {
        try {
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
            
            return redirect()->route('profile');
            
        } catch (ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        }
    }
    

public function profile()
{
    $user = Auth::user();
    return view('profile', compact('user'));
}
public function login(Request $request)
{
    try {
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->intended('home');
        }

        return back()->withErrors([
            'email' => 'Invalid credentials',
        ]);
        
    } catch (ValidationException $e) {
        return back()->withErrors($e->errors())->withInput();
    }
}

   

    public function logout()
    {
        Auth::logout();
        return redirect()->route('signin');
    }

   /* public function account()
    {
        return view('account', ['user' => Auth::user()]);
    }*/
   
}
