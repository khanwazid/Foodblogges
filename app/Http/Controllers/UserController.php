<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;




class UserController extends Controller
{

/**
 * Handle the registration of a new user.
 *
 * This method validates the incoming registration request data, creates a new user in the 'users' table, 
 * logs the user in, and prepares a personalized welcome message. The user is then redirected to a specified route 
 * with a success message displayed. In case of validation errors, the user is redirected back to the form 
 * with error messages and the previous input retained.
 *
 * @param \Illuminate\Http\Request $request The HTTP request containing user registration data.
 * @return \Illuminate\Http\RedirectResponse Redirects the user to the appropriate route with a success or error message.
 */
    public function register(Request $request)
{
    try {
            // Validate the input data to ensure all required fields are present and meet the specified rules
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'username' => 'required|string|unique:users|max:255',
            'email' => 'required|string|email|unique:users|max:255',
            'password' => 'required|string|min:8|confirmed'
        ]);
                // Create a new user record in the 'users' table with the validated data
                 $user = User::create([
                'full_name' => $validated['full_name'],
                'username' => $validated['username'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password'])
        ]);


        
       // Log the newly registered user in
        
      Auth::login($user);

         // Prepare a personalized welcome message for the user upon successful registration
        $welcomeMessage = sprintf(
            'Welcome  %s! Your account has been successfully created. Start exploring our platform!',
            $user->full_name
        );
        
        //Flash the success message to the session
        session()->flash('success', $welcomeMessage);

          // Redirect the user to the 'normal' route, passing the user data with the response
        return redirect()->route('normal')->with('user', $user);
    } catch (ValidationException $e) {
        // Handle validation errors
        // Redirect back to the registration form with error messages and old input.
      
        return back()
            ->withErrors($e->errors())
            ->withInput()
            ->with('error', 'Please check your input and try again.');
    }
}

    


/**
 * Display the login form view.
 *
 * This method returns the login view to the user, allowing them to input 
 * their credentials and access the application. It ensures the correct 
 * rendering of the login page.
 *
 * @return \Illuminate\Contracts\View\View The view for the login form.
 */
public function showLoginForm()
{
    return view('login');
}

/**
 * Handle user login attempt and redirect based on user role.
 * 
 * This method validates the user's credentials (email and password), attempts to authenticate
 * the user, and if successful, redirects them to either the admin dashboard or normal user dashboard 
 * based on their role. It also generates personalized welcome messages. If the authentication fails,
 * the user is redirected back with error messages. 
 * 
 * The session is regenerated upon successful authentication to ensure security.
 * 
 * @param \Illuminate\Http\Request $request The incoming HTTP request containing user credentials.
 * 
 * @return \Illuminate\Http\RedirectResponse Redirects to the appropriate dashboard with a success or error message.
 */
public function login(Request $request)
{
    try {
      // Validate the provided credentials
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Attempt to authenticate the user with the provided credential
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $request->session()->regenerate(); // Regenerate session for security

            // Personalized welcome message
            $welcomeMessage = sprintf(
                'Welcome back, %s! Great to see you again.',
                $user->full_name
            );

            // Redirect based on user role
            return $user->role === 'admin'
                ? redirect()
                    ->route('admin.dashboard')
                    ->with('success', sprintf('Welcome back, %s! You are logged in as Administrator.', $user->full_name))
                : redirect()
                    ->route('normal')
                    ->with('success', $welcomeMessage);
        }

        // Failed authentication
        return back() ->withErrors([
                'email' => 'The provided credentials do not match our records. Please try again.',
            ])->withInput();

    } catch (ValidationException $e) {
        // Handle validation errors
        return back()
            ->withInput()
            ->with('error', 'Please ensure your email and password are entered correctly.');
    } catch (\Throwable $e) {
        // Handle any unexpected errors
        return back()
            ->withInput()
            ->with('error', 'We encountered an issue while logging you in. Please try again.');
    }
}


/**
 * Log out the authenticated user and display a personalized success message.
 * 
 * This method performs the following actions:
 * - Retrieves the username of the currently logged-in user.
 * - Logs out the user and clears their authentication session.
 * - Invalidates the current session and regenerates the CSRF token for security.
 * - Redirects the user to the welcome page with a personalized farewell message.
 *
 * @return \Illuminate\Http\RedirectResponse Redirects to the sign-in page with a success message.
 */

public function logout()
{
    // Get current user's username before logout
    $userName = auth()->user()->username;
    
    // Clear user session and logout
    Auth::logout();
    
    // Clear and invalidate session
    session()->invalidate();
    
    // Regenerate CSRF token
    session()->regenerateToken();
    
    // Create a friendly goodbye message using sprintf
    $logoutMessage = sprintf(
        'See you soon, %s! Have a great day. Looking forward to your next visit.',
        $userName
    );
    
    // Redirect with friendly message
    return redirect()
        ->route('welcome')
        ->with('success', $logoutMessage);
}


    public function updateProfile(Request $request)
    {
       // Retrieve the currently authenticated user
        $user = Auth::user();

    
        try {
             
             // Validate the incoming request data
            $validated = $request->validate([
                'full_name' => 'required|string|max:255',
                'username' => 'required|string|unique:users,username,' . $user->id . '|max:255',
                'email' => 'required|string|email|unique:users,email,' . $user->id . '|max:255',
            ]);
    
            // Update the user's profile in the database
            $user->update([
                'full_name' => $validated['full_name'],
                'username' => $validated['username'],
                'email' => $validated['email'],
            ]);
    
         

        // Create a personalized success message
        $successMessage = sprintf(
            'Great news, %s! Your profile has been successfully updated. Your new information is now active.',
            $user->full_name
        );

        // Flash success message and redirect
        return redirect()
            ->route('admin.dashboard')
            ->with('success', $successMessage);
    
        }  catch (ValidationException $e) {
            // Handle validation errors
            return back()
                ->withErrors($e->errors())
                ->withInput()
                ->with('error', 'Please review the highlighted fields and try again.');
    
        } catch (Exception $e) {
            // Handle unexpected errors
            return back()
                ->withInput()
                ->with('error', 'We encountered an issue while updating your profile. Please try again.');
        }
    }

    /**
 * Handle password change for the authenticated user.
 * 
 * This method validates the user's input for the current password and new password.
 * It checks if the current password matches the stored password, and if so, it updates 
 * the user's password to the new one. If any validation fails or the current password 
 * is incorrect, an error message is returned. The user is redirected to the dashboard 
 * with a success message upon successfully changing their password.
 *
 * @param \Illuminate\Http\Request $request The incoming HTTP request containing the password data.
 *
 * @return \Illuminate\Http\RedirectResponse Redirects to the admin dashboard with success or error message.
 */
    public function changePassword(Request $request)
{
    // Validate the password input
    $validator = Validator::make($request->all(), [
        'current_password' => 'required|string',
        'new_password' => 'required|string|min:8|confirmed', // At least 8 characters and matches confirmation
    ]);


    // If validation fails, return the errors and reopen the modal
    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator) // Return validation errors
            ->with('showChangePasswordModal', true) // Reopen the modal for correction
            ->withInput(); // Keep user input to correct any mistakes
    }

 // Check if current password matches the stored password for the authenticated user
    if (!Hash::check($request->current_password, Auth::user()->password)) {
        return redirect()->back()
            ->with('error', 'Current password is incorrect') // Provide error message if passwords do not match
            ->with('showChangePasswordModal', true); // Reopen the modal for re-entry
    }

    // Proceed to update the password if everything is valid
    $user = Auth::user();
    $user->password = Hash::make($request->new_password); // Hash the new password before saving
     $user->save(); // Save the updated password to the database

    // Redirect to the admin dashboard with a success message
    return redirect()->route('admin.dashboard')->with('success', 'Your Password has been changed successfully!');
}

   
   /* public function edit($id)
    {
        $post = Post::findOrFail($id);
        
        // Check if user owns this post
        if (auth()->id() !== $post->user_id) {
            return redirect()->route('profile')->with('error', 'Unauthorized access');
        }
        
        return view('edit', compact('post'));
    }*/
    
   /* public function update(Request $request, $id)
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
*/

/**
 * Search for users based on the search term provided by the user.
 * 
 * This method handles searching for users by their full name or username. 
 * If a search term is provided, the method filters users based on a `LIKE` query 
 * that matches either the `full_name` or `username` fields. If no users are found, 
 * it redirects back to the user listing page with a message indicating no results.
 * 
 * The results are paginated, displaying up to 4 users per page. If the search yields 
 * no results, a message is shown to inform the user.
 * 
 * @param \Illuminate\Http\Request $request The incoming HTTP request containing the search term.
 * 
 * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse Returns a view with the search results or redirects if no results are found.
 */
public function search(Request $request)
{
    // Initialize the query for users
    $query = User::query();

     // Check if a search term is provided and perform the search
    if ($request->has('search') && $request->search) {
        $searchTerm = $request->search;
        $query->where(function ($q) use ($searchTerm) {
            $q->where('full_name', 'LIKE', "%{$searchTerm}%")
              ->orWhere('username', 'LIKE', "%{$searchTerm}%");
        });
    }

    // Paginate the results to show 4 users per page
    $users = $query->paginate(4);

    // Check if no users were found and return a message for better understanding
    if ($users->isEmpty()) {
        return redirect()->route('users.index')
                         ->with('not_found', 'No users found matching your search criteria.');
    }

    // Return the search results in a view
    return view('list-profile', compact('users'));
}

/**
 * Update the authenticated user's profile information.
 *
 * This method handles the updating of the currently authenticated user's profile
 * by validating the request data, updating the database, and providing user-friendly
 * feedback messages. It also includes exception handling for validation and other 
 * unexpected errors.
 *
 * @param \Illuminate\Http\Request $request The incoming HTTP request containing profile update data.
 * @return \Illuminate\Http\RedirectResponse A redirect response back to the previous page with a status message.
 */

public function updateProfiles(Request $request)
{
   
    // Retrieve the currently authenticated user
    $user = Auth::user();


    try {
        // Validate the incoming request data
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



         // Create a personalized success message
         $successMessage = sprintf(
            'Great news, %s! Your profile has been successfully updated. Your new information is now active.',
            $user->full_name
        );

        // Flash success message and redirect
         return redirect()->back()->with('success',  $successMessage);
    

    } catch (ValidationException $e) {
        // Handle validation errors
        return back()
            ->withErrors($e->errors())
            ->withInput()
            ->with('error', 'Please review the highlighted fields and try again.');

    } catch (Exception $e) {
        // Handle unexpected errors
        return back()
            ->withInput()
            ->with('error', 'We encountered an issue while updating your profile. Please try again.');
    }
}

/**
 * Change the user's password.
 * 
 * This method validates the user's request to change their password. It ensures that the 
 * current password is correct and that the new password meets the required criteria 
 * (minimum 8 characters, confirmed). If the current password does not match, an error 
 * is returned. Once validated, the password is updated and saved for the authenticated user.
 * A success message is displayed upon successful password change.
 * 
 * @param \Illuminate\Http\Request $request The incoming request containing the current and new passwords.
 * 
 * @return \Illuminate\Http\RedirectResponse Redirects back with a success message or validation errors.
 */
public function changePasswords(Request $request)
{
 // Validate the password input
 $validator = Validator::make($request->all(), [
    'current_password' => 'required|string',
    'new_password' => 'required|string|min:8|confirmed', // At least 8 characters and matches confirmation
]);


// If validation fails, return the errors and reopen the modal
if ($validator->fails()) {
    return redirect()->back()
        ->withErrors($validator) // Return validation errors
        ->with('showChangePasswordModal', true) // Reopen the modal for correction
        ->withInput(); // Keep user input to correct any mistakes
}

// Check if current password matches the stored password for the authenticated user
if (!Hash::check($request->current_password, Auth::user()->password)) {
    return redirect()->back()
        ->with('error', 'Current password is incorrect') // Provide error message if passwords do not match
        ->with('showChangePasswordModal', true); // Reopen the modal for re-entry
}

// Proceed to update the password if everything is valid
$user = Auth::user();
$user->password = Hash::make($request->new_password); // Hash the new password before saving
 $user->save(); // Save the updated password to the database

    // Redirect back with a success message indicating the password has been changed
    return back()->with('success', 'Your password has been changed successfully.');
}

}
