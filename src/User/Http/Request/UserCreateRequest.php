<?php

namespace Mari\User\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class UserCreateRequest extends FormRequest
{
  public function authorize()
  {
    return true;
  }

  public function rules()
  {
    return [
      'username' => 'required|unique:users',
      'password' => 'required|min:8',
      'email' => 'required|unique:users|email',
      'firstname' => 'required',
      'lastname' => 'required',
    ];
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
