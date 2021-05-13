<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class Post extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3|max:191',
            'cover' => (empty($this->request->all()['id']) ? 'required|image' : 'image'),
            'author' => 'required',
            'categories' => 'required',
            'description' => 'required|min:8',
            'title' => 'required|min:8',
            'headline' => 'required|min:8',
        ];
    }
}
