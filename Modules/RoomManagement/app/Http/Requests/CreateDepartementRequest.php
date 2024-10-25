<?php

namespace Modules\RoomManagement\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateDepartementRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'type'=>['required', 'string'],
            'description'=>['required', 'string'],
            'number_of_room'=>['required','integer']
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
