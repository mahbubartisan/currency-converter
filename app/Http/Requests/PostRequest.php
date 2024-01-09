<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'title' => 'required|unique:posts,title, ' . $this->id,
            'description' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'meta_keyword' => 'required',
            'category_id' => 'required',
        ];

    }
}
