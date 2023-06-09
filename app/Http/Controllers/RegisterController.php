<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index',[
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

public function store(Request $request)
    {
        
        $validatedData = $request->validate([
        
        'name' => 'required|',
        'username' => 'required|min:3||unique:users',
        'email' =>'required|email:dns|unique:users',
        'password'=>'required|min:5|'

        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        // $request->session()->flash('success', 'Registration successfull!! Please login');

        return redirect('/login')->with('success', 'Registration successfull!! Please login');
    }
}
