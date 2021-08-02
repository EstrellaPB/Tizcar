<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaleRequest extends FormRequest
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
        if( $this->method() == 'POST') {
            return [
                'customer' => 'required',
                'employee' => 'required',
                'automobile' => 'required|unique:sales,automobile_id',
                'extra' => 'required',
                'total' => 'required'
            ];
        }  
        elseif ( $this->method() == 'PUT' || $this->method() == 'PATCH') {
            return [
                'customer' => 'required',
                'employee' => 'required',
                'automobile' => 'required|unique:sales,automobile_id',
                'extra' => 'required',
                'total' => 'required'
            ];
        }
    }
}
