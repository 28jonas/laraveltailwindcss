<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $posts = Post::all();
        return view('backend.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = Category::pluck('name', 'id')->all();

        return view('backend.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id' => 'required|exists:categories,id',
        ]);

        $post = Post::create([
            'title' => $validatedData['title'],
            'content' => $validatedData['content'],
            'user_id' => Auth::id(),
            'category_id'=> $validatedData['category_id'],
        ]);
        $post->categories()->sync($validatedData['category_id']);

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
        $post->load('categories');
        $categories = Category::pluck('name', 'id')->all();
        return view('backend.posts.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request,  Post $post)
    {
        //Validatieberichten
        $validatedData = $request->validated();

        $post->update($validatedData);
        $post->categories()->sync($validatedData['category_id']);
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        return redirect()->back();

    }}

