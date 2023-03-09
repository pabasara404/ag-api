<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Auth\Authenticatable
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'exists:users'],
            'password' => ['required'],
        ],[
            'email.exists' => ' User not found. Please contact the admin for support.',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return [...Auth::user()->toArray(), 'role'=> 'Admin'];
        }

        throw ValidationException::withMessages([
            'password' => ['Incorrect Password.'],
        ]);
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:8', 'required_with:password_confirmation', 'same:password_confirmation'],
            'password_confirmation' => ['required', 'min:8'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json([
            'user' => $user,
        ]);
    }

    public function logout()
    {
        Auth::logout();
        // $userinfo =  auth()->user();
        // return $this->handleResponse($userinfo, 'Successfully logged out.');
    }
}
