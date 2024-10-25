<?php

namespace Modules\RoomManagement\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;
use Modules\RoomManagement\Enums\RoomStatus;

class CreateRoomRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'room_number'=> ['required','integer'],
            'status'=>['required', new Enum(RoomStatus::class)],
            'departement_id'=>['required', 'exists:departements,id']

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
