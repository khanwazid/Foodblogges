<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Validation\Rules\Password;



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
            session()->flash('success', 'Registration successful! Welcome .');
            
            return redirect()->route('normal');
            
        } catch (ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        }
    }
    


/*public function profile()
{
 

    
    return view('normal');
}*/
public function showLoginForm()
{
    return view('login');
}

/*
public function login(Request $request)
{
    try {
    $credentials = $request->validate([
        'email' => 'required|string|email',
            'password' => 'required|string'
    ]);

    if (Auth::attempt($credentials)) {
        $user = Auth::user();

       
        
       if ($user->role === 'admin') {
            return redirect()->route('home');
        }
        
        return redirect()->route('firstpage');
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
}*/
public function login(Request $request)
{
    try {
        // Validate user credentials
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Attempt authentication
        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Redirect based on user role
            return $user->role === 'admin'
                ? redirect()->route('admin.dashboard')->with('success', 'Welcome back, Admin!') // Redirect admin to home
                : redirect()->route('normal')->with('success', 'Welcome back!'); // Redirect regular user
        }

        // Failed authentication
      //  return redirect()->route('login.show')
        //   ->withInput()
         //   ->with('loginError', 'These credentials do not match our records.');

            return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ])->withInput();

    } catch (ValidationException $e) {
        // Handle validation errors
        return redirect()->route('login.show')
            ->withInput()
            ->with('loginError', 'Invalid input. Please check your email and password format.');
    } catch (\Throwable $e) {
        // Handle any unexpected errors
        return redirect()->route('login.show')
            ->withInput()
            ->with('loginError', 'An unexpected error occurred. Please try again later.');
    }
}

   

    public function logout()
    {
        Auth::logout();
        return redirect()->route('signin');
    }

    public function updateProfile(Request $request)
    {
       
        $user = Auth::user();

    
        try {
            $validated = $request->validate([
                'full_name' => 'required|string|max:255',
                'username' => 'required|string|unique:users,username,' . $user->id . '|max:255',
                'email' => 'required|string|email|unique:users,email,' . $user->id . '|max:255',
            ]);
    
            // Update the user's data
            $user->update([
                'full_name' => $validated['full_name'],
                'username' => $validated['username'],
                'email' => $validated['email'],
            ]);
    
            session()->flash('success', 'Account data updated successfully.');
            return redirect()->route('admin.dashboard');
    
        } catch (ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        } catch (Exception $e) {
            return back()->with('error', 'An unexpected error occurred. Please try again.');
        }
    }
    public function changePassword(Request $request)
{
    // Validate the password input
    $validator = Validator::make($request->all(), [
        'current_password' => 'required|string',
        'new_password' => 'required|string|min:8|confirmed', // At least 8 characters and matches confirmation
    ]);

    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->with('showChangePasswordModal', true) // Indicate to reopen modal
            ->withInput();
    }

    // Check if current password matches
    if (!Hash::check($request->current_password, Auth::user()->password)) {
        return redirect()->back()
            ->with('error', 'Current password is incorrect')
            ->with('showChangePasswordModal', true);
    }

    // Update the password
    $user = Auth::user();
    $user->password = Hash::make($request->new_password);
    $user->save();

    return redirect()->route('admin.dashboard')->with('success', 'Password changed successfully!');
}

   /* public function changePassword(Request $request),,,,,,,,,,,,,,,,,,,
    {
        // Validate the password input
        $validator = Validator::make($request->all(), [
            'current_password' => 'required|string',
            'new_password' => 'required|string|min:8|confirmed', // Ensure password is at least 8 characters and matches confirmation
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Check if current password matches
        if (!Hash::check($request->current_password, Auth::user()->password)) {
            return redirect()->back()->with('error', 'Current password is incorrect');
        }

        // Update the password
        $user = Auth::user();
        $user->password = Hash::make($request->new_password);
        $user->save();

        return redirect()->route('admin.dashboard')->with('success', 'Password changed successfully!');
    }*/
    /*public function changePassword(Request $request)
{
    $user = Auth::user();

    // Validate the password input
    $validator = Validator::make($request->all(), [
        'current_password' => 'required|string',
        'new_password' => 'required|string|min:8|confirmed',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // Check if current password matches
    if (!Hash::check($request->current_password, $user->password)) {
        return redirect()->back()->with('error', 'Current password is incorrect');
    }

    // Update the password
    $user->password = Hash::make($request->new_password);
    $user->save();

    return redirect()->route('profile')->with('success', 'Password changed successfully!');
}*/
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        
        // Check if user owns this post
        if (auth()->id() !== $post->user_id) {
            return redirect()->route('profile')->with('error', 'Unauthorized access');
        }
        
        return view('edit', compact('post'));
    }
    
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        
        if (auth()->id() !== $post->user_id) {
            return redirect()->route('profile')->with('error', 'Unauthorized access');
        }
    
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'header_pic' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'read_time' => 'required|integer',
            'categories' => 'required|string',
            'cook_time' => 'required|integer',
            'prep_time' => 'required|integer',
            'serves' => 'required|integer',
        ]);
    
        if ($request->hasFile('header_pic')) {
            Storage::disk('public')->delete($post->header_pic);
            $validated['header_pic'] = $request->file('header_pic')->store('images', 'public');
        }
    
        $post->update($validated);
        
        return redirect()->route('profile')->with('success', 'Post updated successfully!');
    }
    public function destroy($id)
{
    $post = Post::findOrFail($id);
    
    // Check if user owns this post
    if (auth()->id() === $post->user_id) {
        // Delete the image if exists
        if ($post->header_pic) {
            Storage::disk('public')->delete($post->header_pic);
        }
        
        $post->delete();
        return redirect()->route('profile')->with('success', 'Post deleted successfully!');
    }
    
    return redirect()->route('profile')->with('error', 'Unauthorized action');
}
/*public function index()
{
  //  $users = User::all(); // Get all users
     // Getting all users excluding the admins
     $users = User::where('role', '!=', 'admin')->paginate(4);
    return view('list-profile', compact('users'));
}*/


/*public function updates(Request $request, $id)
{
    $request->validate([
        'full_name' => 'required|string|max:255',
        'username' => 'required|string|max:255',
        'email' => 'required|email|max:255',
    ]);

    $user = User::findOrFail($id);

    // Allow admin to update other users but prevent normal users from updating others
    if (auth()->user()->role !== 'admin' && auth()->id() !== $user->id) {
        return redirect()->route('users.index', ['id' => $id])->with('error', 'You do not have permission to update this profile.');
    }

    $user->update([
        'full_name' => $request->full_name,
        'username' => $request->username,
        'email' => $request->email,
    ]);

    return redirect()->route('users.index', ['id' => $user->id])->with('success', 'Profile updated successfully!');
}
*/
public function delete($id)
{
    // Find the user by ID
    $user = User::find($id);

    // Check if the user exists
    if (!$user) {
        return redirect()->route('users.index')->with('error', 'User not found!');
    }

    // Only allow deletion if the user is an admin or the current user is the same
    if (auth()->user()->role === 'admin' || auth()->id() == $user->id) {
        // Proceed to delete the user
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully!');
    }

    // If unauthorized
    return redirect()->route('users.index')->with('error', 'Unauthorized action');
}


/*public function edits($id)
{
    // Find the user by ID, throwing a 404 error if not found
    $user = User::findOrFail($id);

    // Check if the logged-in user is an admin or the user themselves
    if (auth()->user()->role !== 'admin' && auth()->id() !== $user->id) {
        return redirect()->route('users.index')->with('error', 'You do not have permission to edit this profile.');
    }

    // Proceed to show the edit form with the user data
    return view('edit-profile', compact('user'));
}*/
public function search(Request $request)
{
    $query = User::query();

    if ($request->has('search') && $request->search) {
        $searchTerm = $request->search;
        $query->where(function ($q) use ($searchTerm) {
            $q->where('full_name', 'LIKE', "%{$searchTerm}%")
              ->orWhere('username', 'LIKE', "%{$searchTerm}%");
        });
    }

    // Paginate results
    $users = $query->paginate(4);

    // Check if no users were found and return a message for better understanding
    if ($users->isEmpty()) {
        return redirect()->route('users.index')
                         ->with('not_found', 'No users found matching your search criteria.');
    }

    return view('list-profile', compact('users'));
}

public function updateProfiles(Request $request)
{
   
    $user = Auth::user();


    try {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'username' => 'required|string|unique:users,username,' . $user->id . '|max:255',
            'email' => 'required|string|email|unique:users,email,' . $user->id . '|max:255',
        ]);

        // Update the user's data
        $user->update([
            'full_name' => $validated['full_name'],
            'username' => $validated['username'],
            'email' => $validated['email'],
        ]);

        //session()->flash('success', 'Account data updated successfully.');
     
        return redirect()->back()->with('success', 'Account data updated successfully.');

    } catch (ValidationException $e) {
        return back()->withErrors($e->errors())->withInput();
    } catch (Exception $e) {
        return back()->with('error', 'An unexpected error occurred. Please try again.');
    }
}
/*public function changePasswords(Request $request)
{
    // Validate the password input
    $validator = Validator::make($request->all(), [
        'current_password' => 'required|string',
        'new_password' => 'required|string|min:8|confirmed', // Ensure password is at least 8 characters and matches confirmation
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // Check if current password matches
    if (!Hash::check($request->current_password, Auth::user()->password)) {
        return redirect()->back()->with('error', 'Current password is incorrect');
    }

    // Update the password
    $user = Auth::user();
    $user->password = Hash::make($request->new_password);
    $user->save();

    return redirect()->back()->with('success', 'Password changed successfully!');
}*/

/*public function changePasswords(Request $request)
{
    $request->validate([
        'current_password' => 'required|min:6',
        'new_password' => 'required|min:6|confirmed',
        'new_password_confirmation' => 'required'
    ]);

    if (!Hash::check($request->current_password, auth()->user()->password)) {
        return back()->with('error', 'Current password is incorrect');
    }

    auth()->user()->update([
        'password' => Hash::make($request->new_password)
    ]);

    return back()->with('success', 'Password changed successfully!');
}*/

public function changePasswords(Request $request)
{
    $request->validate([
        'current_password' => 'required',
        'new_password' => 'required|min:8|confirmed',
    ]);

    $user = Auth::user();

    // Check if the current password matches
    if (!Hash::check($request->current_password, $user->password)) {
        return back()->withErrors(['current_password' => 'The current password is incorrect.'])->withInput();
    }

    // Update the user's password
    $user->update(['password' => Hash::make($request->new_password)]);

    return back()->with('success', 'Your password has been changed successfully.');
}

}
