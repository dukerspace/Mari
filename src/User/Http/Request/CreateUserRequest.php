<?php

namespace Mari\User\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{

  public function rules()
  {
    return [
      'username' => 'required|unique:users',
      'password' => 'required|min:8',
      'email' => 'required|unique:users',
    ];
  }

  public function authorize()
  {
    return true;
  }

  public function messages()
  {
    return [
      'username.required' => trans('user::messages.usernameRequired'),
      'password.required' => trans('user::messages.passwordRequired'),
      'email.required' => trans('user::messages.emailRequired'),
    ];
  }

}
