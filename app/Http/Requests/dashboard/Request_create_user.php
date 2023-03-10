<?php

namespace App\Http\Requests\dashboard;

use Illuminate\Foundation\Http\FormRequest;

class Request_create_user extends FormRequest
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
//            'name'=>'required|max:8',
//            'password'=>'required',
//            'email' => 'required|email|unique:users,email',
//             'phone' => 'required|regex:/(01)[0-9]{9}/',
//            'photo' =>" mimes:jpg,png,gif"
        ];
    }
}
