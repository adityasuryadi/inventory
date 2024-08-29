<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Response as Resp;

class CreateRequestItemRequest extends FormRequest
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
            'nik'=>'required|numeric',
            'name'=>'required',
            'departement'=>'required',
            'carts.*.product'=>'required',
            'carts.*.quantity'=>'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'nik.required' => 'NIK Mohon di pilih',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->json([
                'data'=> $validator->errors(),
                'status'=>Resp::$statusTexts[400],
                'code'=>Resp::HTTP_BAD_REQUEST],400)
        );
    }
}
