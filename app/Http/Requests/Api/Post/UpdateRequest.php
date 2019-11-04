<?php

namespace App\Http\Requests\Api\Post;

use App\Http\Requests\JsonRequest;

class UpdateRequest extends JsonRequest
{
    public function rules()
    {
        return [
            'title' => 'nullable|string|min:1',
            'subtitle' => 'nullable|string|min:1',
            'content' => 'nullable|string|min:1',
        ];
    }
}
