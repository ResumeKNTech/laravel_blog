<?php

namespace App\Http\Controllers\Api\Vue\Complete;

use App\Http\Controllers\Controller;
use App\Models\PostComment;
use Illuminate\Http\Request;

class CompletePostCommentController extends Controller
{
    public function __invoke(Request $request, PostComment $posts_comment)
    {
        // Giả sử 'status' là trường bạn muốn cập nhật
        $posts_comment->status = $request->status; // Thay đổi trạng thái của bài viết
        $posts_comment->save();

        // Bạn có thể trả về một response, ví dụ như:
        return response()->json(['message' => 'Comment completed successfully.']);
    }
}
