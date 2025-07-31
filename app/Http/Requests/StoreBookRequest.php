<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
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
            'title'          => 'required|string|max:255',
            'author_id' => 'nullable|exists:authors,id',
            'isbn'           => 'nullable|string|max:20|unique:books,isbn',
            'publisher'      => 'nullable|string|max:255',
            'year'           => 'nullable|digits:4|integer|min:1500|max:' . (date('Y') + 1),
            'quantity'       => 'required|integer|min:1',
            'shelf_location' => 'nullable|string|max:100',
            'status'         => 'required|in:available,issued,damaged',
        ];
    }
}
