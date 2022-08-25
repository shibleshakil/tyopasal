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

    public function createVendor(){
        return view('vendor_form');
    }
    public function storeVendor(Request $request){
        dd($request->all());
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

    public function passwordResetForm()
    {
        return view('back.dashboard.password');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required|min:4|max:16',
            'new_password' => 'required|min:4|max:16',
            'renew_password' => 'required|min:4|max:16',
        ]);

        $resp = $this->repository->updatePassword($request);

        if($resp['status']){
            return redirect()->back()->withSuccess($resp['message']);
        }else{
            return redirect()->back()->withErrors($resp['message']);
        }

    }
}
