<?php

namespace Mari\User\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
{
  public function authorize()
  {
    return true;
  }

  public function rules()
  {
    return [
      'username' => 'required|unique:users',
      'password' => 'min:8',
      'password_confrim' => 'same:password',
      'email' => 'required|unique:users|email',
      'firstname' => 'required',
      'lastname' => 'required',
    ];
  }

  public function messages()
  {
    return [
      'username.required' => trans('user::messages.usernameRequired'),
      'password.min' => trans('user::messages.passwordMin'),
      'email.required' => trans('user::messages.emailRequired'),
    ];
  }

}
