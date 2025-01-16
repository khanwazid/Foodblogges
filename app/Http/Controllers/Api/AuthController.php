<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        try {
            // Validate the input
            $validator = Validator::make($request->all(), [
                'full_name' => 'required|string|max:255',
                'username' => 'required|string|unique:users|max:255',
                'email' => 'required|string|email|unique:users|max:255',
                'password' => 'required|string|min:8|confirmed'
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Validation errors',
                    'errors' => $validator->errors()
                ], 422);
            }

            // Create a new user
            $user = User::create([
                'username' => $request->username,
                'password' => Hash::make($request->password),
                'email' => $request->email,
                'full_name' => $request->full_name,
            ]);

             // Generate token
             $token = $user->createToken('auth_token')->plainTextToken;

             // Return success response with resource
             return response()->json([
                'success' => true,
                'message' => 'User registered successfully',
                'data' => new UserResource($user),
                'token' => $token,
            ], 201);

        } catch (\Exception $e) {
            // Handle errors
            return response()->json([
                'success' => false,
                'message' => 'An error occurred during registration',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
    public function login(Request $request)
    {
        try {
            // Validate input
            $validator = Validator::make($request->all(), [
                'email' => 'required|string|email|max:255',
                'password' => 'required|string|min:8',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Validation errors',
                    'errors' => $validator->errors(),
                ], 422);
            }

            // Find user by email
            $user = User::where('email', $request->email)->first();

            // Verify password
            if (!$user || !Hash::check($request->password, $user->password)) {
                return response()->json([
                    'success' => false,
                    'message' => 'Invalid email or password',
                ], 401);
            }

            //$user->load('posts');

           
            // Generate token
            $token = $user->createToken('auth_token')->plainTextToken;


            // Return success response
            return response()->json([
                'success' => true,
                'message' => 'Login successful',
                'user' => new UserResource($user),
                //'data' => new UserResource($user),
                //'posts' => PostResource::collection($user->posts), 
                'token' => $token,
            ], 200);

        } catch (\Exception $e) {
            // Handle errors
            return response()->json([
                'success' => false,
                'message' => 'An error occurred during login',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
    public function logout(Request $request)
    {
        try {
            // Revoke the user's token
            $request->user()->currentAccessToken()->delete();

            return response()->json([
                'success' => true,
                'message' => 'Logout successfully',
            ], 200);

        } catch (\Exception $e) {
            // Handle errors
            return response()->json([
                'success' => false,
                'message' => 'An error occurred during logout',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    
    public function updateProfile(Request $request)
    {
        try {
            // Getting the authenticated user
            $user = $request->user(); // This will return the logged-in user

            // Validating the incoming request data
            $validatedData = $request->validate([
                
                'full_name' => 'required|string|max:255',
                'username' => 'required|string|unique:users|max:255,' .  $user->id,
                'email' => 'required|string|email|unique:users|max:255,' .  $user->id, 
                'password' => 'required|string|min:8|confirmed'
            ]);

            // If the user is updating their password, hash it
            if (isset($validatedData['password'])) {
                $validatedData['password'] = Hash::make($validatedData['password']);
            }

            // Update the user's profile with validated data
            $user->update($validatedData);

            // Return success response
            return response()->json([
                'success' => true,
                'message' => 'Profile data updated successfully.',
                'data' => new UserResource($user),
               
            ], 200);


          
        } catch (ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Validation error',
                'errors' => $e->errors(),
            ], 422); 
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to update the profile.',
                'error' => $e->getMessage(),
            ], 500); 
        }
    }
}


