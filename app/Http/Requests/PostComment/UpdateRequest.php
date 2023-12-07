<?php

namespace App\Http\Requests\PostComment;

use Illuminate\Foundation\Http\FormRequest;

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
            'slug' => 'required',
            'comment' => 'sometimes|required|string',
            'status' => 'sometimes|in:active,inactive',
            'replied_comment' => 'nullable|string',
        ];
    }
}
