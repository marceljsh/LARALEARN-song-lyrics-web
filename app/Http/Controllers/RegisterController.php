<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Sign Up'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255|min:1|unique:users',                    # format code igniter
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],     # format laravel, sama aja
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        # ini juga bcrypt
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::factory()->create($validatedData);

        return redirect('/login')->with('success', "Registration successful! Please login.");
    }
}
