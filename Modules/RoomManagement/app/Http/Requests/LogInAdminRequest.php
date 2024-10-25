<?php

namespace Modules\RoomManagement\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LogInAdminRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'user_name'=>['required','string','exists:admins,user_name'],
            'password'=> ['required', 'min:8','max:50'],
            'role' => ['boolean']
        ];
    }


    public function authorize(): bool
    {
        return true;
    }
}
