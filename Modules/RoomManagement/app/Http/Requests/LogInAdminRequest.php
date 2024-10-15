<?php

namespace Modules\RoomManagement\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LogInAdminRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'user_name'=>['required','string','exists:admins,user_name'],
            'password'=> ['required', 'min:8','max:50','confirmed'],
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
