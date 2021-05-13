<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class User extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check() && Auth::user()->is_admin == 1;
    }

    public function all($keys = null)
    {
        //Essa função limpa o CPF para o Request consultar no banco de dados. Sem isso, o CPF nunca vai ser encontrado
        return $this->validateFields(parent::all());
    }

    public function validateFields(array $inputs)
    {
        $inputs['document'] = str_replace(['.','-'], '', $this->request->all()['document']);
        return $inputs;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3|max:191',
            'last_name' => 'required|min:3|max:191',
            'genre' => 'in:masculino,feminino,binario',
            'document' => (!empty($this->request->all()['id']) ? 'required|min:11|max:14|unique:Users,document,'. $this->request->all()['id'] : 'required|min:11|max:14|unique:Users,document'),
            'date_of_birth' => 'required',
            'cover' => (empty($this->request->all()['id']) ? 'required|image' : 'image'),

            //Address - Endereço
            'zipcode' => 'required|min:8|max:9',
            'street' => 'required',
            'number' => 'required',
            'neighborhood' => 'required',
            'state' => 'required',
            'city' => 'required',

            //Contact - Contato
            'cell' => 'required',

            //Access - Acesso
            'email' => (!empty($this->request->all()['id']) ? 'required|email|unique:Users,email,' . $this->request->all()['id'] : 'required|email|unique:Users,email'),

        ];
    }
}
