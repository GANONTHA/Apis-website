<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //show the blog page
    public function index()
    {
        return view('partials.blogs.index');
    }
    //display a single post
    public function show($id)
    {
        $post = Blog::findOrFail($id);
        return view('partials.blogs.blog-details', ['post' => $post]);
    }
}
