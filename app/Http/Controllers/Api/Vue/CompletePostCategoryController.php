<?php

namespace App\Http\Controllers\Api\Vue;
use App\Http\Controllers\Controller;
use App\Models\PostCategory;
use Illuminate\Http\Request;

class CompletePostCategoryController extends Controller
{
    public function __invoke(Request $request, PostCategory $postCategory)
    {
        // Giả sử 'status' là trường bạn muốn cập nhật
        $postCategory->status = $request->status; // Thay đổi trạng thái của bài viết
        $postCategory->save();

        // Bạn có thể trả về một response, ví dụ như:
        return response()->json(['message' => 'Post category completed successfully.']);
    }
}
