<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index(Request $request){

        $blog = Blog::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.pages.blog.listing', compact('blog'));

    }
}
