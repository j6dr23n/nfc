<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::with('info', 'socials', 'skills')->where('id', 1)->firstOrFail();
        $blogs = Blog::with('author')->where('user_id', 1)->wherePublished(true)->latest()->paginate(9);

        return view('index', compact('user', 'blogs'));
    }

    public function show($username)
    {
        $user = User::with('info', 'socials', 'skills')->where('username', $username)->firstOrFail();
        $blogs = Blog::where('user_id', $user->id)->wherePublished(true)->latest()->paginate(9);

        return view('index', compact('user', 'blogs'));
    }

    public function blog_show($slug)
    {
        $blog = Blog::with('author')->where('slug', $slug)->firstOrFail();

        return view('pages.blog.show', compact('blog'));
    }

    public function blog_index()
    {
        $blogs = Blog::with('author')->where('user_id', 1)->wherePublished(true)->latest()->paginate(9);

        return view('pages.blog.index', compact('blogs'));
    }
}
