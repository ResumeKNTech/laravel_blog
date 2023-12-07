<?php

namespace App\Http\Controllers\Api\Vue;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostCategory\StoreRequest;
use App\Http\Requests\PostCategory\UpdateRequest;
use App\Http\Resources\PostCategoryResource;
use App\Models\PostCategory;
use Illuminate\Http\Request;

class PostCategoryController extends Controller
{
    public function index()
    {
        return PostCategoryResource::collection(PostCategory::all());
    }

    public function show(PostCategory $posts_category){
        return PostCategoryResource::make($posts_category);
    }
    
    public function store(StoreRequest $request)
    {
        $posts_category = PostCategory::create($request->validated());

        return PostCategoryResource::make($posts_category);
    }
    public function update(UpdateRequest $request, PostCategory $posts_category)
    {
        $posts_category->update($request->validated());

        return PostCategoryResource::make($posts_category);
    }

    public function destroy(PostCategory $posts_category){
        $posts_category->delete();
        return response()->json(['message' => 'Post category deleted successfully.']);

    }
}
