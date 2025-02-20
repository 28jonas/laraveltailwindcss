<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'content' => 'required|string',
            'category_id' => 'required|array|exists:categories,id',
        ];

    }

    public function messages()
    {
        return [
            'title.required' => 'De titel is verplicht.',
            'content.required' => 'Er is niets ingevuld want de inhoud is verplicht.',
            'title.unique' => 'De titel moet uniek zijn.',
            'category_id.required' => 'Selecteer minimaal een rol voor de gebruiker.',
            'category_id.*.exists' => '1 van de geselecteerde categoriën bestaat niet.',
            'category_id.array' => 'De categori&een moeten een lijst van ID\'s zijn.',
        ];
    }
}
