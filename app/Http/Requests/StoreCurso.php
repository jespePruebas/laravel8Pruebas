<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
/* return true en caso que esta validado con por ejemplo login */
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
            'name'=>'required|max:10',
            'description'=>'required|min:10',
            'category'=>'required',
   
        ];
    }

    public function attributes(){
        return[
        'name'=>'nombre-curso',
        ];
    }

    public function messages(){
        return[
            'description.required'=>'No puede dejar el campo descripcion vacio',
        ];
    }

}