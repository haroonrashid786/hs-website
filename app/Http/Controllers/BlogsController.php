<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class BlogsController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $baseQuery = Blog::orderBy('created_at', 'desc');
        if (!empty($search)) {
            $baseQuery->where('name', 'like', "%{$search}%")
            ->orWhere('designation', 'like', "%{$search}%")
            ->orWhere('type', 'like', "%{$search}%");
        }

        $blogs = $baseQuery->paginate(20);
        return view('admin.blogs', compact('blogs'));
    }

    public function blogs()
    {
        // Get the latest blog
        $latestBlog = Blog::latest()->first();

        // Get all blogs except the latest one
        $otherBlogs = Blog::when(!empty($latestBlog), function($q) use($latestBlog){
               $q->where('id', '!=', $latestBlog->id);
        })->latest()->get();
        return view('blogs', compact('latestBlog', 'otherBlogs'));
    }

    public function blogdetail($slug)
    {
        $blog = Blog::where('slug',$slug)->first();

        return view('blog-details', compact( 'blog'));
    }

    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blog.show', compact('blog'));
    }


    public function create(Request $request): View
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'banner_image' => 'nullable|image',
            'type' => 'nullable|string|max:255',
            'author' => 'nullable|string|max:255',
            'designation' => 'nullable|string|max:255',
            'second_image' => 'nullable|image',
            'third_image' => 'nullable|image',
        ]);

        $blog = new Blog();
        $blog->name = $request->name;
        $blog->description = $request->description;
        $blog->type = $request->type;
        $blog->author = $request->author ?? 'admin';
        $blog->designation = $request->designation;

        if ($request->hasFile('banner_image')) {
            $blog->banner_image = $request->file('banner_image')->store('banner_images', 'public');
        }

        if ($request->hasFile('second_image')) {
            $blog->second_image = $request->file('second_image')->store('second_images', 'public');
        }

        if ($request->hasFile('third_image')) {
            $blog->third_image = $request->file('third_image')->store('third_images', 'public');
        }

        $blog->save();

        return redirect()->route('admin-blogs')->with('status', 'Blog added successfully!');
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blog.edit', compact('blog'));
    }

    public function delete($id)
    {
        Blog::find($id)->delete();
        return back()->with('success', 'Blog deleted Successfully');
    }
    public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'nullable|string|max:255',
        'description' => 'nullable|string',
        'banner_image' => 'nullable|image',
        'type' => 'nullable|string|max:255',
        'author' => 'nullable|string|max:255',
        'designation' => 'nullable|string|max:255',
        'second_image' => 'nullable|image',
        'third_image' => 'nullable|image',
    ]);

    $blog = Blog::findOrFail($id);
    $blog->name = $request->name;
    $blog->description = $request->description;
    $blog->type = $request->type;
    $blog->author = $request->author ?? 'admin';
    $blog->designation = $request->designation;

    if ($request->hasFile('banner_image')) {
        // Delete old banner image if it exists
        if ($blog->banner_image) {
            Storage::disk('public')->delete($blog->banner_image);
        }
        // Upload new banner image
        $blog->banner_image = $request->file('banner_image')->store('banner_images', 'public');
    }

    if ($request->hasFile('second_image')) {
        // Delete old second image if it exists
        if ($blog->second_image) {
            Storage::disk('public')->delete($blog->second_image);
        }
        // Upload new second image
        $blog->second_image = $request->file('second_image')->store('second_images', 'public');
    }

    if ($request->hasFile('third_image')) {
        // Delete old third image if it exists
        if ($blog->third_image) {
            Storage::disk('public')->delete($blog->third_image);
        }
        // Upload new third image
        $blog->third_image = $request->file('third_image')->store('third_images', 'public');
    }

    $blog->save();

    return redirect()->route('admin-blogs')->with('status', 'Blog updated successfully!');
}

}
