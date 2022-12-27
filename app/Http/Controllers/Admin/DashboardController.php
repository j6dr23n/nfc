<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Skill;
use App\Models\Social;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if (auth()->user()->role === 'admin') {
            $users = User::get();
            $blogs = Blog::with('author')->get();
            $skills = Skill::get();
            $socials = Social::get();

            return view('admin.dashboard', compact('users', 'blogs', 'skills', 'socials'));
        }

        return redirect(route('dashboard.profile'));
    }
    public function profile()
    {
        $ph_numbers = [];

        $user = User::with('info')->findOrFail(auth()->id());
        $blogs = Blog::where('user_id', $user->id)->latest()->paginate(12);
        $socials = Social::where('user_id', $user->id)->get();
        $skills = Skill::where('user_id', $user->id)->get();
        $icons = Social::whereNull('url')->get();
        if ($user->info !== null) {
            $ph_numbers = explode(",", $user->info->ph_number);
        }

        return view('admin.user', compact('user', 'ph_numbers', 'socials', 'skills', 'icons', 'blogs'));
    }
}
