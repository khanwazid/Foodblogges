<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Exception;


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
public function showLoginForm()
{
    return view('signin');
}


public function login(Request $request)
{
    try {
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('home');
        }

        return redirect()->route('login.show')
            ->withInput()
            ->with('loginError', 'These credentials do not match our records.');

    } catch (ValidationException $e) {
        return redirect()->route('login.show')
            ->withInput()
            ->with('loginError', 'Please check your email and password format.');
            
    } catch (\Exception $e) {
        return redirect()->route('login.show')
            ->withInput()
            ->with('loginError', 'An unexpected error occurred. Please try again.');
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