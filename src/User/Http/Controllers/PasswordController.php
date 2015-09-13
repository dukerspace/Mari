<?php

namespace Mari\User\Http\Controllers;

use Illuminate\Routing\Controller;
use Auth, Redirect, Request, Validator, View;

use Mari\User\Http\Repositories\User\UserRepository;
use Mari\User\Http\Request\CreateUserRequest;

class UserController extends Controller {

  public function __construct(UserRepository $user)
  {
    $this->user = $user;
  }

  public function forgetPassword()
  {

  }

  public function checkForgetPassword()
  {

  }

  public function resetPassword()
  {

  }

  public function checkResetPassword()
  {

  }

}
