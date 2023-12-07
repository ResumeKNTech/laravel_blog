<?php

namespace App\Http\Controllers\Api\Vue;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostTag\StoreRequest;
use App\Http\Requests\PostTag\UpdateRequest;
use App\Http\Resources\PostTagResource;
use App\Models\PostTag;
use Illuminate\Http\Request;

class PostTagController extends Controller
{
    public function index()
    {
        return PostTagResource::collection(PostTag::all());
    }

    public function show(PostTag $posts_tag){
        return PostTagResource::make($posts_tag);
    }
    public function store(StoreRequest $request)
    {
        $posts_tag = PostTag::create($request->validated());

        return PostTagResource::make($posts_tag);
    }
    public function update(UpdateRequest $request, PostTag $posts_tag)
    {
        $posts_tag->update($request->validated());

        return PostTagResource::make($posts_tag);
    }

    public function destroy(PostTag $posts_tag){
        $posts_tag->delete();
        return response()->json(['message' => 'Post tag deleted successfully.']);

    }
}
