<?php

namespace Modules\DoctorManagement\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddDoctorRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'full_name'=> ['string','required','min:3','max:50','regex:/^[\pl\s]+$/u'],
            'birth_date'=> [ 'required','date','date_format:Y-m-d'],
            'address'=>['required','string'],
            'departement_id'=> ['required', 'exists:departements,id'],
             'Specialization_id'=> ['required', 'exists:specializations,id'],
             'user_name'=>['required','string','unique:doctors,user_name'],
            'password'=> ['required', 'min:8','max:50','confirmed'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
