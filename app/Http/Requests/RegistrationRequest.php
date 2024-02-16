<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class RegistrationRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(Request $request)
    {
        
     //   dd($request);
        if($request->registration_type == 1)
        {
            $rules = [
                'event_order' => 'required',
                'firstname' => 'required',
                'lastname' => 'required',
                'gender' => 'required',
                'birthyear' => 'required',
                'country' => 'required',
                'phone1' => 'required',
                'email' => 'required',
            ];

            return $rules;
    
        }

        else{

            $rul = [];
            for($i = 1;$i <= 2;$i++)
            {
                $rul['firstname_'.$i] = 'required';
            }

            return $rul;


        }
        
    }
}
