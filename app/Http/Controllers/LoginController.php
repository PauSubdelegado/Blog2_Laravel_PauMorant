<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function loginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credencials = $request->only('login', 'password');

        if (Auth::attempt($credencials)) {
            return redirect()->intended(route('posts.index'));
        }

        $error = 'Usuari o password incorrectes';
        return view('auth.login', compact('error'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('posts.index');
    }
}
