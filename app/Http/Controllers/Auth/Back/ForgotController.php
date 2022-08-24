<?php

namespace App\Http\Controllers\Auth\Back;

use App\Http\Controllers\Controller;
use App\{
    Models\Admin,
    Repositories\Both\ForgotRepository
};
use Illuminate\Http\Request;

class ForgotController extends Controller
{
    public function __construct(ForgotRepository $repository){
        $this->repository = $repository;
        $this->middleware('guest:admin');
    }

    public function showForm(){
        return view('auth.passwords.email');
    }

    public function forgot(Request $request)
    {
        if ($data = Admin::whereEmail($request->email)->first()){
            $this->repository->forgot($data,$request,'back');
            return redirect()->back()->withSuccess(__('We Have Sent a Link To Your Account!. Please Check Your Email.'));
        }
        else{
            return redirect()->back()->withErrors(__('No Account Found With This Email.'))->withInput($request->all());
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $token
     * @return \Illuminate\Http\Response
     */
    public function showChangePassForm($token)
    {
        if($token){
            if( Admin::whereEmailToken($token)->exists() ){
            return view('auth.passwords.reset',compact('token'));
            }
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function changepass(Request $request){
        $data =  Admin::whereEmailToken($request->file_token)->first();
        // dd($data);
        if (!$data) {
            return back()->withErrors("No Account Found With This Email.");
        }
        $resp = $this->repository->updatePassword($data,$request,'back');
        if($resp['status']){
            return redirect($resp['redurect_url'])->withSuccess($resp['message']);
        }else{
            return redirect()->back()->withErrors($resp['message']);
        }

    }
}
