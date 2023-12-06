<?php

namespace App\Http\Controllers\Api\Vue;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\UpdateRequest;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return PostResource::collection(Post::all());
    }

    public function show(Post $post){
        return PostResource::make($post);
    }
    public function store(StoreRequest $request)
    {
        $post = Post::create($request->validated());

        return PostResource::make($post);
    }
    public function update(UpdateRequest $request, Post $post)
    {
        $post->update($request->validated());

        return PostResource::make($post);
    }

    public function destroy(Post $post){
        $post->delete();
        return response()->json(['message' => 'Post deleted successfully.']);

    }
}
