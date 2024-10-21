<?php

namespace Modules\DoctorManagement\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LogInDoctorRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'user_name'=>['required','string','exists:doctors,user_name'],
            'password'=> ['required', 'min:8','max:50'],
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
}
