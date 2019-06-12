<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FedexRequest extends FormRequest
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
            'date_and_time' => 'required|max:100|',
            'behavior_aht' => 'required|max:100|',
            'adp_agent' => 'required|max:100|',
            'outcome_behavior' => 'required|max:100|',
            'auditor_id' => 'required|max:100|',
            'call_id' => 'required|max:100|',
            'customer' => 'required|max:100|',
            'audit_date' => 'required|max:100|',
            'stage' => 'required|max:100|',
            'call_duration' => 'required|max:100|',
            'reason_of_the_call' => 'required|max:100|',
            'subtopic' => 'required|max:100|',
            'driver_aht' => 'required|max:100|',
        ];
    }
}
