<?php

namespace Modules\PatientManagement\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LogInPatientRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'user_name'=>['required','string','exists:patients,user_name'],
            'password'=> ['required', 'min:8','max:50'],
        ];
    }


    public function authorize(): bool
    {
        return true;
    }
}
