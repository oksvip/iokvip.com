<?php

namespace App\Http\Requests;

class UserRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch ($this->method()) {
            case 'GET':
                return [
                    //
                ];
                break;

            case 'POST':
                return [
                    'email' => 'required|email|exists:users',
                    'password' => 'required',
                ];
                break;

            case 'PUT':
                return [
                    //
                ];
                break;

            case 'PATCH':
                return [
                    //
                ];
                break;

            case 'DELETE':
                return [
                    //
                ];
                break;

            default:
                return [
                    //
                ];
                break;
        }
    }

    /**
     * 提示消息
     */
    public function messages()
    {
        switch ($this->method()) {
            case 'GET':

                break;

            case 'POST':
                return [
                    'email.required' => '邮件 必填。',
                    'email.email' => '邮件 格式不正确。',
                    'email.exists' => '邮件 不存在。',
                    'password.required' => '密码 必填。',
                ];
                break;

            case 'PUT':

                break;

            case 'PATCH':

                break;

            case 'DELETE':

                break;

            default:
                return [
                    //
                ];
                break;
        }
    }
}
