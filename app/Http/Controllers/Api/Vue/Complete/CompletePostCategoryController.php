<?php

namespace App\Http\Controllers\Api\Vue\Complete;
use App\Http\Controllers\Controller;
use App\Models\PostCategory;
use Illuminate\Http\Request;

class CompletePostCategoryController extends Controller
{
    public function __invoke(Request $request, PostCategory $posts_category)
    {
        // Giả sử 'status' là trường bạn muốn cập nhật
        $posts_category->status = $request->status; // Thay đổi trạng thái của bài viết
        $posts_category->save();

        // Bạn có thể trả về một response, ví dụ như:
        return response()->json(['message' => 'Post category completed successfully.']);
    }
}
