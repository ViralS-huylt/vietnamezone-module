<?php

namespace Modules\VietNamZone\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class UpdateVietNamZoneRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(Request $request)
    {
        $id = $request->get('id');

        return [
            localize_field('name') => 'required',
            'gso_id'                     => 'required|unique:vietnam_zones,gso_id,' . $id,
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
