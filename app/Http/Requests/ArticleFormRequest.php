<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ArticleFormRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // Phan nay dung de phan quyen cho User nao duoc phep truy cap va chinh sua noi dung Form, mac dinh tra ve false
        // O day de bang true de coi nhu ai cung sua duoc
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
            'title' => 'required|min:10',
            'content' => 'required|min:20'
        ];
    }
}
