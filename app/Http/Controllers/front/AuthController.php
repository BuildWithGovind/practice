<?php

namespace App\Http\Controllers\Front;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Str;

class AuthController extends Controller
{
      public function authlogin(LoginRequest $request){
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $request->session()->regenerate();
            return redirect()->intended('dashboard')->with('success', 'Login successful!');
        }
        return back()->with('error', 'Invalid login credentials.');
    }

    public function login(){
        return view('front.pages.login');
    }

    public function signup(){   
        return view('front.pages.signup');
    }

     public function authsignup(RegisterRequest $request)
    {
     
        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'role_id'     => '1',
        ]);

        Auth::login($user);

        return redirect()->route('login')->with('success', 'Account created successfully! Please Login To Continue');
    }

    public function forgot(){   
        return view('front.pages.forgot');
    }

    public function verify($id){

        $user = User::where('reset_password_token', $id)->first();

        if (!$user) {
            return redirect()->route('home')->with(['error' => 'I think you are not a valid person.']);
        }

        if (Carbon::now()->greaterThan($user->reset_token_expires_at)) {
            return redirect()->route('home')->with(['error' => 'Sorry but your password link is expired.']);
        }

        return view('front.pages.verify',compact('id'));
    }

    public function authverify(Request $request){
        $request->validate([
            'token' => 'required|string',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::where('reset_password_token', $request->token)->first();

        if (!$user) {
            return redirect()->route('home')->with('error', 'Invalid or expired password reset token.');
        }

        if (Carbon::now()->greaterThan($user->reset_token_expires_at)) {
            return redirect()->route('home')->with('error', 'Sorry, your password reset link has expired.');
        }

        $user->password = Hash::make($request->password);
        $user->reset_password_token = null;
        $user->reset_token_expires_at = null;
        $user->save();

        return redirect()->route('login')->with('success', 'Password reset successfully. Please login with your new password.');
    }
    

    public function authforgot(Request $request){
        $request->validate([
            'email' => 'required|email',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user) {

            $token = Str::random(64);
            $expiresAt = Carbon::now()->addMinutes(15);
            $user->reset_password_token = $token;
            $user->reset_token_expires_at = $expiresAt;
            $user->save();
        }

        return redirect()->back()->withErrors(['success' => 'We will sent email if your account available with us to reset your password.']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home')->with('success', 'You have been logged out successfully.');
    }
}
