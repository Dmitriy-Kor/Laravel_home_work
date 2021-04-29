<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateNews extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => ['required', 'string', 'min:3', 'max:100'],
            'text' => ['required', 'string', 'min:10'],
            'slug' => ['required', 'string', 'min:3', 'max:100'],
            'status' => ['required'],
            'category_id' => ['required'],
            'image' => ['sometimes', 'image:jpg,jpeg,png']

        ];
    }
}
