<?php

namespace App\Http\Controllers\Api\Vue\Complete;
use App\Http\Controllers\Controller;
use App\Models\PostTag;
use Illuminate\Http\Request;

class CompletePostTagController extends Controller
{
    public function __invoke(Request $request, PostTag $posts_tag)
    {
        // Giả sử 'status' là trường bạn muốn cập nhật
        $posts_tag->status = $request->status; // Thay đổi trạng thái của bài viết
        $posts_tag->save();

        // Bạn có thể trả về một response, ví dụ như:
        return response()->json(['message' => 'Post tag completed successfully.']);
    }
}
