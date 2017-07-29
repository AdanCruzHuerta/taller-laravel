<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class UserController extends Controller
{
    public function registrar(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if (!is_object($user)) {
            $user = User::create($request->all());
            return redirect('/')->with('user_created', 'success');
        } else {
            return redirect('/registrar')->with('user_created', 'error');
        }
    }

    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if (is_object($user)) {
            Auth::login($user);
            return redirect('/panel');
        } else {
            return back();
        }
    }

    public function panel()
    {
        return view('panel');
    }

    public function cerrarSesion()
    {
        Auth::logout();
        return redirect('/');
    }
}
