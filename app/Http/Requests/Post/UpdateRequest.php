<?php

namespace App\Http\Requests\Post;


class UpdateRequest extends StoreRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'summary' => 'required|string|max:500',
            'description' => 'nullable|string',
            'quote' => 'nullable|string',
            'photo' => 'nullable|image|max:2048', // giới hạn 2MB cho hình ảnh
            'tags' => 'nullable|string',
            'status' => 'required|in:active,inactive',
            'post_cat_id' => 'required|exists:post_categories,id',
            'post_tag_id' => 'nullable|exists:post_tags,id',
        ];
    }
}
