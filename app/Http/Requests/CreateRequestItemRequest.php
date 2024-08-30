<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Response as Resp;
use App\Rules\CheckQuantity;

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
            'request_date'=>'required',
            'carts.*.product.id'=>'required',
            'carts.*.quantity'=>['required','min:1','numeric',
            function ($attribute, $value, $fail) {
                $index = explode('.', $attribute)[1];
                $productId = $this->request->get('carts')[$index]['product']['id'];

                $rule = new CheckQuantity($productId);
                if (!$rule->passes($attribute, $value)) {
                    $fail($rule->message());
                }
            }
        ],
        ];
    }

    public function messages()
    {
        return [
            'nik.required' => 'NIK Mohon di pilih',
            'date.required' => 'Tanggal Mohon di Isi',
            'carts.*.product.id'=>[
                'required'=>'Barang Harus Di Pilih',
            ],
            'carts.*.quantity.min'=>'Kuantiti Minimal 1',
            'carts.*.quantity.numeric'=>'Kuantiti Harus Berupa Angka',
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
