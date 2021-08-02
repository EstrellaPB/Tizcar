<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
        // dd($this->method());
        if( $this->method() == 'POST') {
            return [
                'name' => 'required',
                'last_name' => 'required',
                'email' => 'required|email|unique:customers,email',
                'address' => 'required',
                'phone' => 'required'
            ];
        }  
        elseif ( $this->method() == 'PUT' || $this->method() == 'PATCH') {
            return [
                'name' => 'required',
                'last_name' => 'required',
                'email' => 'required|email|unique:customers,email,' . $this->route('customer'),
                'address' => 'required',
                'phone' => 'required'
            ];
        }
       
    }
}
