<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class store_services extends FormRequest
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
        return [
            'user_id'=>'exists:users,id',
            'title'=>'required|string',
            'image'=>'required|image|mimes:jpeg,png,jpg',
            'description'=>'required|string',
            'another_title'=>'nullable|string',
            'another_image'=>'nullable|image|mimes:jpeg,png,jpg',
            'another_description'=>'nullable|string',
            'another_price'=>'nullable|numeric',
        ];
    }
}
