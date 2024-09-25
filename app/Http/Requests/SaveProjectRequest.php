<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;



class SaveProjectRequest extends FormRequest
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
            'titulo' => 'required',
            'url' => [
                'required',
                Rule::unique('projects')->ignore($this->route('project'))
            ],
            'description' => 'required',
            'category_id' => ['required','exists:categories, id'] ,
            'image' => [$this->route('project') ? 'nullable' : 'required', 'image'],

        ];
    }

    public function messages()
    {
        return [
            'titulo.required' => 'El proyecto necesita un titulo',
            'url.required' => 'El proyecto necesita una url',
            'description.required' => 'El proyecto necesita una descripcion',


        ];
    }
}
