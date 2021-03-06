<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

use Illuminate\Foundation\Http\FormRequest;
use App\Department;
class ProjetFormRequest extends FormRequest
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
            
            'titre' => 'required',
             'description'=>'required',
            'department_id' =>'required',
            'image' => 'required|mimes:jpeg,png,gif'



        ];
    }
}
