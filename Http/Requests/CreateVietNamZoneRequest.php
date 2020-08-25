<?php

namespace Modules\VietNamZone\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateVietNamZoneRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            localize_field('name') =>  'required|unique:vietnam_zone_translations,name',
            'gso_id' => 'required|digits_between:1,5|unique:vietnam_zones,gso_id'
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
