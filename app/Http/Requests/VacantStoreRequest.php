<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VacantStoreRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'description' => 'required',
            'requirements' => 'required',
            'business' => 'required',
            'email' => 'required',
            'telefono' => 'required',
            'deadline' => 'required',
            'country_id' => 'required',
            'council_id' => 'required',
            'city_id' => 'required',
            'team_id' => 'required',
            'category_id' => 'required',

        ];
    }
}
