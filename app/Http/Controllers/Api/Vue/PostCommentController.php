<?php

namespace App\Http\Controllers\Api\Vue;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostComment\StoreRequest;
use App\Http\Requests\PostComment\UpdateRequest;
use App\Http\Resources\PostCommentResource;
use App\Models\PostComment;
use Illuminate\Http\Request;

class PostCommentController extends Controller
{
    public function index()
    {
        return PostCommentResource::collection(PostComment::all());
    }

    public function show(PostComment $posts_comment){
        return PostCommentResource::make($posts_comment);
    }
    public function store(StoreRequest $request)
    {
        $posts_comment = PostComment::create($request->validated());

        return PostCommentResource::make($posts_comment);
    }
    public function update(UpdateRequest $request, PostComment $posts_comment)
    {
        $posts_comment->update($request->validated());

        return PostCommentResource::make($posts_comment);
    }

    public function destroy(PostComment $posts_comment){
        $posts_comment->delete();
        return response()->json(['message' => 'Post category deleted successfully.']);

    }
}
