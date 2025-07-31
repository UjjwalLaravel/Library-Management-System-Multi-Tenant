<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAuthorRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // You can add permission logic here later
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'biography' => 'nullable|string',
            'birthdate' => 'nullable|date|before:today',
            'nationality' => 'nullable|string|max:100',
        ];
    }
}
