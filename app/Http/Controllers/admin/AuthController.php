<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator ,Auth;

class AuthController extends Controller
{
    public function login(Request $request){
        return view('admin.pages.login');
    }

    public function loginSubmit(Request $request)
    {
        // Validation
        $validator = Validator::make($request->all(), [
            'email'    => 'required|email',
            'password' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }   


        if (Auth::guard('web')->attempt([
            'email' => $request->email,
            'password' => $request->password
        ], $request->remember)) {
            return redirect()->route('admin.dashboard');
        }

        // If failed
        return redirect()->back()
            ->withErrors(['email' => 'Invalid credentials'])
            ->withInput();
    }

    public function forgot(Request $request){
        return view('admin.pages.forgot');
    }

    public function resetPassword(Request $request){
        return view('admin.pages.resetpassword');
    }
}
