<?php

namespace App\Http\Controllers\Auth\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ForgotController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin');

    }

    public function showForm(){
        return "ok";
    }
}
