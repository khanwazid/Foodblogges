<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'website' => 'nullable|url|max:255',
            'message' => 'required|string|min:10'
        ]);

        $contact = Contact::create([
            'user_id' => Auth::id(),
           'full_name' => $validated['full_name'],
            'email' => $validated['email'],
            'website' => $validated['website'],
            'message' => $validated['message']
        ]);

        return redirect()->back()->with('success', 'Your message has been sent successfully !');
    }
    public function index(Request $request)
    {
        $query = Contact::query();

        if ($request->has('search')) {
            $search = $request->get('search');
            $query->where('full_name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%");
        }

        $contacts = $query->latest()->paginate(10);

        return view('admin.list-contacts', compact('contacts'));
    }
}
