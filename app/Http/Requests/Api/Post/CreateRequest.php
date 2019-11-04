<?php

namespace App\Http\Requests\Api\Post;

use App\Http\Requests\JsonRequest;

class CreateRequest extends JsonRequest
{
    public function rules()
    {
        return [
            'title' => 'required|string|min:1',
            'subtitle' => 'required|string|min:1',
            'content' => 'required|string|min:1',
        ];
    }
}
