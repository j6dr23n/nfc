<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Blog\StoreRequest;
use App\Http\Requests\Blog\UpdateRequest;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        return view('admin.blogs.index');
    }

    public function create()
    {
        $this->authorize('create', Blog::class);

        return view('admin.blogs.create');
    }

    public function store(StoreRequest $request)
    {
        $this->authorize('create', Blog::class);
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->extension();

            $data['image'] = Storage::putFile('public/blogs/images', $image, 'public');
            $data['image'] = str_replace('public/', '', $data['image']);
        }
        $data['user_id'] = auth()->id();
        $data['slug'] = Str::slug($data['title']);

        $blog = Blog::create($data);

        if ($blog) {
            return redirect(route('dashboard.profile'))->with('success', 'Blog Created!!!');
        }

        return back()->with('error', 'Something Worng!!!');
    }

    public function show($id)
    {
        $blog = Blog::with('author')->findOrFail($id);
        $blogs = Blog::with('author')->latest()->get()->take(3);

        return view('admin.blogs.show', compact('blog', 'blogs'));
    }

    public function edit($id)
    {
        $blog = Blog::with('author')->findOrFail($id);
        $this->authorize('update', $blog);

        return view('admin.blogs.edit', compact('blog'));
    }

    public function update(UpdateRequest $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $this->authorize('update', $blog);

        $data = $request->validated();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->extension();

            $data['image'] = Storage::putFile('public/blogs/images', $image, 'public');
            $data['image'] = str_replace('public/', '', $data['image']);

            Storage::delete($blog->image);
        } else {
            $data['image'] = $blog->image;
        }

        $data['slug'] = Str::slug($data['title']);

        $blog->fill($data)->save();

        return back()->with('success', 'Blog Updated!!!');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $this->authorize('delete', $blog);

        $blog->delete();

        return redirect(route('dashboard.profile'))->with('success', 'Blog Deleted!!!');
    }
}
