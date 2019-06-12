<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdpRequest extends FormRequest
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
            /*'call_id' => 'required|max:100|',
            'card_name' => 'required|max:100|',
            'adp_agent' =>'required|max:100|',
            'call_date' => 'required|max:100|',
            'auditor_id' => 'required|max:100|',
            'call_time' => 'required|max:100|',
            'monitor_date' => 'required|max:100|',
            'call_duration' => 'required|max:100|',
            'monitor_type' => 'required|max:100|',
            'csp_stage' => 'required|max:100|',
            'transfer' => 'required|max:100|',
            'subtopic' => 'required|max:100|',
            'type_customer' => 'required|max:100|',
            'location' => 'required|max:100|',
            'reason' => 'required|max:100|',
            'feedback' => 'required|max:100|',
            'score' => 'required|max:100|'*/            
        ];
    }
}
