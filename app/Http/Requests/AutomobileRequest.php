<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class AutomobileRequest extends FormRequest
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
                'serial_number' => 'required',
                'year' => 'required|digits:4|integer|min:1900|max:'.(date('Y')+1),
                'model' => 'required',
                'brand' => 'required',
                'price' => 'required|numeric|between:1,99999999.99'
            ];
        }  
        elseif ( $this->method() == 'PUT' || $this->method() == 'PATCH') {
            return [
                'serial_number' => 'required',
                'year' => 'required|digits:4|integer|min:1900|max:'.(date('Y')+1),
                'model' => 'required',
                'brand' => 'required',
                'price' => 'required|numeric|between:1,99999999.99'
            ];
        }
    }
}
