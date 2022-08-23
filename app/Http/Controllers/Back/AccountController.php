<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\ImageUpdateRequest;
use App\Repositories\Back\AccountRepository;
use Illuminate\Http\Request;
use Auth;

class AccountController extends Controller
{
    public function __construct(AccountRepository $repository){
        $this->middleware('auth:admin');

        $this->repository = $repository;
    }

    public function index(){
        return view('back.dashboard.index');
    }

    public function profileForm(){
        $data = Auth::guard('admin')->user();
        return view('back.dashboard.profile', compact('data'));
    }

    public function updateProfile(ImageUpdateRequest $request){
        $this->repository->updateProfile($request);
        return redirect()->back()->withSuccess(__('Profile Updated Successfully!'));

    }
}
