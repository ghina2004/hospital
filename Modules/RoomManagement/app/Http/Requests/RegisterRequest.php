<?php

namespace Modules\RoomManagement\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'user_name'=>['required','string','unique:admins,user_name'],
            'password'=> ['required', 'min:8','max:50','confirmed'],
        ];
    }


    public function authorize(): bool
    {
        return true;
    }
}
