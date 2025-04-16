<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blogs::all();
        return view('blog', compact('blogs'));
    }

    public function blogDetail($lang,$id)
    {
        $blog = Blogs::find($id);
        $recentBlogs = Blogs::where('id', '!=', $id)->orderBy('created_at', 'desc')->take(6)->get();
        return view('blogDetail', compact('blog', 'recentBlogs'));
    }
}
