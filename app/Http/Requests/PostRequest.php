<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        switch ($this->method()) {
            case 'POST':
                return [
                    'title' => 'required|string',
                    'body' => 'required|string',
                    'featured_image' => 'required|image',
                ];
                break;
            case 'PUT':
            case 'PATCH':
                return [
                    'title' => 'nullable|string',
                    'body' => 'nullable|string',
                    'featured_image' => 'nullable|image',
                ];
                break;
        }
    }
}
