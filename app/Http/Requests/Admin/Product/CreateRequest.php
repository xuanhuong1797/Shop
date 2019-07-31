<?php

namespace App\Http\Requests\Admin\Product;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            //
            'name'=> 'required|max:255',
            'price' => 'required',
            'description'=> 'required',
            'quantity' => 'required',
            'brand'=> 'required',
            'category' => 'required',
            'image' => 'required',
            'image.' => 'image|mimes:jpeg,jpg,png|max:5120',
        ];
    }
}
