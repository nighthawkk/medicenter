<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ContactFormRequest extends Request
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


    public function rules()
    {
        return [
            'name'=>'alpha',
            'first_name' => 'alpha',
            'last_name' => 'alpha',
            'phone_number'=>'numeric|min:8',
            'email' => 'required|email',
            'message' => 'min:25',
            'Question'=>'min:25'
        ];
    }
}
