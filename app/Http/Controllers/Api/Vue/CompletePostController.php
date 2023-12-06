<?php

namespace App\Http\Controllers\Api\Vue;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class CompletePostController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Post $post)
    {
        // Giả sử 'status' là trường bạn muốn cập nhật
        $post->status = $request->status; // Thay đổi trạng thái của bài viết
        $post->save();

        // Bạn có thể trả về một response, ví dụ như:
        return response()->json(['message' => 'Post completed successfully.']);
    }
}
