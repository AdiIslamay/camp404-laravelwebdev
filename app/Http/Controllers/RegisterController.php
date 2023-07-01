<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index ()
    {
        return view('register.index');
    }

    public function store(Request $request) 
    {
        $validatedDate = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        $validatedDate['password'] = bcrypt($validatedDate['password']);
        //$validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedDate);

        //$request->session->flash('success', 'Registrasion Successfull! Pleas Login' );

        return redirect('/login')->with('success', 'Registration Successfull! Please Login');
    }
}
