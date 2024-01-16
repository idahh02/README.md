<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        // Check for specific email and password combinations
        if ($email == 'ainnatashya123@gmail.com' && $password == 'ain123') {
            // Login successful
            return redirect('/bloodbags');
        } else {
            // Invalid email or password, display error
            return back()->withErrors(['email' => 'Invalid email or password']);
        }
    }

}
