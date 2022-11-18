<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        return view('post/index')->with('posts', Post::all());
    }


    public function create()
    {
        return view('post/create');
    }

    public function store(PostRequest $request)
    {
        $post = new Post;
        $post->fill($request->validated());

        $post->featured_image = $request->file('featured_image')->storePublicly('post_images', ['disk' => 'public']);

        $post->save();

        return redirect()->back()->with('success', 'Post created successfully!');
    }


    public function show(Post $post)
    {
        return view('post/show')->with('post', $post);
    }


    public function edit(Post $post)
    {
        return view('post/edit')->with('post', $post);
    }


    public function update(PostRequest $request, Post $post)
    {
        $post->fill($request->validated());

        if ($request->hasFile('featured_image')) {
            $post->featured_image = $request->file('featured_image')->storePublicly('post_images', ['disk' => 'public']);
        }

        $post->save();

        return redirect()->back()->with('success', 'Post updated successfully!');
    }


    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->back()->with('success', 'Post deleted successfully!');
    }
}
