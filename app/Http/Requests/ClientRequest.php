<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\ZipCodeRule;

class ClientRequest extends FormRequest
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
            'last_name' => 'required',
            'first_name' => 'required',
            'gender' => 'required',
            'email' => 'required|email:rfc',
            'postcode' => ['required', new ZipCodeRule],
            // 'postcode' => 'required',
            'address' => 'required',
            'building_name' => 'nullable',
            'opinion' => 'required|max:120',
        ];
    }

    public function  messages()
    {
        return[
            'last_name.required' => '姓(セイ)を入力してください!',
            'first_name.required' => '名(メイ)を入力してください!',
            'email.required' =>'メールアドレスを入力してください!',
            'email.email:rfc' => 'メールアドレスの形式で入力してください!',
            'postcode.required' => '郵便番号を記入してください!',
            'postcode.required|new ZipCodeRule' => '郵便番号の形式で記入してください!',
            'address.required' => '住所を入力してください!',
            'opinion.required' => 'ご意見を入力してください!',
            'opinion.max:120' => 'ご意見を120文字以内で入力してください!'
        ];

    }
}
