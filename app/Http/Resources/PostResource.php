<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
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
            'title' => $this->title,
            'slug' => $this->slug,
            'summary' => $this->summary,
            'description' => $this->description,
            'quote' => $this->quote,
            'photo' => $this->photo,
            'tags' => $this->tags,
            'status' => $this->status,
            'category_id' => $this->post_cat_id,
            'tag_id' => $this->post_tag_id,
            'author_id' => $this->added_by,
            'created_at' => $this->created_at->toDateString(),
            'updated_at' => $this->updated_at->toDateString(),
            // Bạn có thể thêm thêm các trường hoặc logic tùy chỉnh khác tại đây
        ];
    }
}
