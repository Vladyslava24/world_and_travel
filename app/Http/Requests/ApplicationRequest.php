<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplicationRequest extends FormRequest
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
            'name' => 'required | max:100',
            'email' => 'required | min:15 | max:64 | email' //| unique:visitors'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Поле Ім\'я* є обв\' язковим',
            'email.required' => 'Поле Email* є обов\' язковим',
            'name.max' => 'Поле Ім\'я не має перевищувати 100 символів',
            'email.min' => 'Поле Email* не має бути меньше, ніж 15 символів',
            'email.max' => 'Поле Email* не має перевищувати 64 символи',
            'email.email' => 'Поле Email* повинен бути дійсною адресою електронної пошти.'
            //'email.unique' => 'Поле email має бути унікальним'
        ];
    }
}
