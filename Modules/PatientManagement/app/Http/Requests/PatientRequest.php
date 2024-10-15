<?php

namespace Modules\PatientManagement\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'full_name'=> ['string','required','min:3','max:50','regex:/^[\pl\s]+$/u'],
            'birth_date'=> [ 'required','date','date_format:Y-m-d'],
            'gender'=>['required','string'],
            'address'=>['required','string'],
            'medical_history'=>['required','string'],
            'user_name'=>['string','required','min:3','max:50','unique:patients,user_name'],
            'password'=> ['required', 'min:8','max:50','confirmed'],
        ];
    }


    public function authorize(): bool
    {
        return true;
    }
}
