<?php

namespace App\Http\Requests\v1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'role_id' => 'exists:roles,id',
            'first_name' => 'string',
            'last_name' => 'string',
            'dni' => 'string',
            'email' => ['string','email','max:255',
                Rule::unique('users','email')->ignore($this->route('user'))],
            'password' => 'sometimes|string|min:6|confirmed',
        ];
    }
}
