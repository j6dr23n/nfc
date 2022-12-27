<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Cookie;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->cookie('username')) {
            return redirect(route('home.show', request()->cookie('username')));
        }
        $ph_numbers = [];

        $user = User::with('info', 'socials', 'skills')->where('id', 1)->firstOrFail();
        if ($user->info !== null) {
            $ph_numbers = explode(",", $user->info->ph_number);
        }

        $blogs = Blog::with('author')->where('user_id', 1)->wherePublished(true)->latest()->paginate(9);

        return view('index', compact('user', 'blogs', 'ph_numbers'));
    }

    public function show($username)
    {
        cookie()->queue(cookie('username', $username, 3));
        $ph_numbers = [];

        $user = User::with('info', 'socials', 'skills')->where('username', $username)->firstOrFail();
        if ($user->info !== null) {
            $ph_numbers = explode(",", $user->info->ph_number);
        }
        $blogs = Blog::where('user_id', $user->id)->wherePublished(true)->latest()->paginate(9);

        return view('index', compact('user', 'blogs', 'ph_numbers'));
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
