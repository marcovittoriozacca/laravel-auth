<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'name' => ['required', 'max:150', 'unique:projects'],
            'description' => ['required'],
            'category' => ['nullable', 'max:50'],
            'link' => ['nullable'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Il campo Nome è obbligatorio',
            'name.max' => 'La lungezza massima dei caratteri è di 150',
            'name.unique' => 'Questo nome è già stato utilizzato in precedenza',
            'description.required' => 'Il campo Descrizione è obbligatorio',
            'category.max' => 'La lungezza massima dei caratteri è di 50',
        ];
    }
}
