<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOrderRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'customer' => 'sometimes|required|string|max:255',
            'product' => 'sometimes|required|string|max:255',
            'quantity' => 'sometimes|required|integer|min:1',
            'status' => 'sometimes|required|string|in:Pending,Completed,Cancelled',
        ];
    }
}
