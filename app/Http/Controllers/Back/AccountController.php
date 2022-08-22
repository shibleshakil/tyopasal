<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Auth;

class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');

    }

    public function index(){
        return view('back.dashboard');
    }
}
