<?php

namespace App\Http\Controllers\Api\Vue;

use App\Http\Controllers\Controller;
use App\Models\PostComment;
use Illuminate\Http\Request;

class CompletePostCommentController extends Controller
{
    public function __invoke(Request $request, PostComment $postComment)
    {
        // Giả sử 'status' là trường bạn muốn cập nhật
        $postComment->status = $request->status; // Thay đổi trạng thái của bài viết
        $postComment->save();

        // Bạn có thể trả về một response, ví dụ như:
        return response()->json(['message' => 'Comment completed successfully.']);
    }
}
