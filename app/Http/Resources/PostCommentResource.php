<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostCommentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'comment' => $this->comment,
            'status' => $this->status,
            'replied_comment' => $this->replied_comment,
            'parent_id' => $this->parent_id,
            'user_id' => $this->user_id,
            'post_id' => $this->post_id,
            'author_id' => $this->added_by,
            'created_at' => $this->created_at->toDateString(),
            'updated_at' => $this->updated_at->toDateString(),
            // Bạn có thể thêm thêm các trường hoặc logic tùy chỉnh khác tại đây
        ];
    }
}
