<?php 

namespace Joselfonseca\LaravelAdmin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateRoleRequest
 * @package Joselfonseca\LaravelAdmin\Http\Requests
 */
class UpdateRoleRequest extends FormRequest
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
            'display_name' => 'required',
            'name' => 'required',
            'description' => 'required'
        ];
    }
}
