<?php

namespace App\Http\Requests\PostComment;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'comment' => 'required|string',
            'status' => 'in:active,inactive',
            'replied_comment' => 'nullable|string',
            'parent_id' => 'nullable|integer|exists:post_comments,id',
            'user_id' => 'nullable|integer|exists:users,id',
            'post_id' => 'nullable|integer|exists:posts,id',
        ];
    }
}
