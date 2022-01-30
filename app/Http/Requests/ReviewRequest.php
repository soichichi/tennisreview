<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends FormRequest
{
   
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'review.user' => 'required|string|max:10',
            'review.history' => 'required|string|max:10',
            'review.kind' => 'required|string|max:20',
            'review.score' => 'required|integer|max:10',
            'review.body' => 'required|string|max:300',
            
        ];
    }
}
