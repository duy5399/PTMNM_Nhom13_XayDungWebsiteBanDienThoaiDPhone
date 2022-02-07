<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddProductRequest extends FormRequest
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
            'txtproduct_thumb' => 'image',
            'txtlist_thumb_1' => 'image',
            'txtlist_thumb_2' => 'image',
            'txtlist_thumb_3' => 'image',
            'txtlist_thumb_4' => 'image',
            'txtlist_thumb_5' => 'image',
        ];
    }
}
