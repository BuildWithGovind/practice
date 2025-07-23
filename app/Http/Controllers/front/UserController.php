<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard(){
        return view('front.pages.dashboard');
    }

    public function profile(){
        return view('front.pages.profile');
    }
}
