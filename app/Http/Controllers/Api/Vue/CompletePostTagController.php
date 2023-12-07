<?php

namespace App\Http\Controllers\Api\Vue;
use App\Http\Controllers\Controller;
use App\Models\PostTag;
use Illuminate\Http\Request;

class CompletePostTagController extends Controller
{
    public function __invoke(Request $request, PostTag $postTag)
    {
        // Giả sử 'status' là trường bạn muốn cập nhật
        $postTag->status = $request->status; // Thay đổi trạng thái của bài viết
        $postTag->save();

        // Bạn có thể trả về một response, ví dụ như:
        return response()->json(['message' => 'Post tag completed successfully.']);
    }
}
