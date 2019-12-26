<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactUsRequest extends FormRequest
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
        'name'  => 'required',
        'email' => 'required|email',
        'subject' => 'required',
        // 'contact_no'=>'required | regex:/(94)[0-9]{9}/ | min:11|numeric',
        'message' =>'required',
        ];
    }
}
