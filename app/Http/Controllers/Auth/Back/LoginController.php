<?php

namespace App\Http\Controllers\Auth\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
// use Illuminate\Http\Request;
use Auth;
// use App\Models\Admin;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin', ['except' => ['logout']]);
    }

    public function showForm()
    {
        return view('auth.login');
    }

    public function login(AuthRequest $request)
    {
        // Attempt to log the user in
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            // if successful, then redirect to their intended location
            // echo "Login correct!";
            return redirect()->intended(route('back.dashboard'));
        }
        // return "Login incorrect!";

        // if unsuccessful, then redirect back to the login with the form data
        return redirect()->back()->withErrors(__('Email Or Password Doesn\'t Match !'))->withInput($request->except('password'));
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }
}
