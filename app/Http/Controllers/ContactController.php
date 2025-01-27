<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    /**
 * Store a newly created contact message in the database.
 * 
 * This method validates the incoming request data, ensuring that the full name, email, and message are provided, 
 * and that the email and website (if provided) are in the correct format. If the validation passes, a new contact 
 * message is created in the database, associating it with the currently authenticated user.
 * 
 * @param \Illuminate\Http\Request $request The request object containing the contact form data.
 * @return \Illuminate\Http\RedirectResponse Redirects back to the previous page with a success message.
 */
    public function store(Request $request)
{
    // Validate the incoming request data with custom error messages
    $validated = $request->validate([
        'full_name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'website' => 'nullable|url|max:255',
        'message' => 'required|string|min:10'
    ], [
         // Custom validation messages
        'full_name.required' => 'Please enter your name',
        'email.required' => 'Please enter your email address',
        'email.email' => 'Please enter a valid email address',
        'website.url' => 'Please enter a valid website URL',
        'message.required' => 'Please enter your message',
        'message.min' => 'Your message must be at least 10 characters'
    ]);

    // Create a new contact record in the database, associating it with the authenticated user
    $contact = Contact::create([
        'user_id' => Auth::id(), // Store the authenticated user's ID
        'full_name' => $validated['full_name'],
        'email' => $validated['email'],
        'website' => $validated['website'],
        'message' => $validated['message']
    ]);
    // Redirect back to the previous page with a success message
    return redirect()->back()->with('success', 'Your message has been sent successfully !');
}

/**
 * Display a list of contacts with optional search functionality.
 * 
 * This method retrieves all contact messages from the database, with an optional search feature that allows 
 * filtering contacts by their full name or email address. The search query is applied if a search term is 
 * provided in the request. The results are then paginated and displayed in the `admin.list-contacts` view.
 * 
 * @param \Illuminate\Http\Request $request The request object containing the search query (optional).
 * @return \Illuminate\View\View Returns the view displaying the list of contacts, with pagination.
 */
    public function index(Request $request)
    {
          // Create a query for fetching all contact records
        $query = Contact::query();

         // Apply the search filter if a search term is provided in the request
        if ($request->has('search')) {
            $search = $request->get('search');
            $query->where('full_name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%");
        }

        // Get the paginated list of contacts, ordered by the latest
        $contacts = $query->latest()->paginate(10);
        
         // Return the view displaying the list of contacts with pagination
        return view('admin.list-contacts', compact('contacts'));
    }
}
