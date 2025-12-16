<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(20);
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
            'category' => 'nullable|string|max:100',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:5120',
        ]);

        // Upload image if provided
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('blog', 'public');
            $data['image'] = Storage::url($path);
        }

        Post::create($data);
        return redirect()->route('admin.posts.index')->with('success', 'Article créé');
    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
            'category' => 'nullable|string|max:100',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:5120',
        ]);

        // Upload image if provided
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('blog', 'public');
            $data['image'] = Storage::url($path);
        }

        $post->update($data);

        return redirect()->route('admin.posts.index')->with('success', 'Article mis à jour');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.posts.index')->with('success', 'Article supprimé');
    }
}
