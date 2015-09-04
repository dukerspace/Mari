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

  public function login()
  {
    return View::make('frontend::user.login');
  }

  public function check()
  {
    $username = Request::input('username');
    $password = Request::input('password');
    $rememberMe = Request::input('remember-me');

    $validator = Validator::make(Request::all(),[
      'username' => 'required',
      'password' => 'required',
    ]);

    if ($validator->passes()) {
      if(!empty($rememberMe)) {
        $remember = true;
      } else {
        $remember = false;
      }

      if (Auth::attempt(['username' => $username, 'password' => $password],$remember)) {
        return Redirect::to('user');
      } else {
        return Redirect::to('user/login')
          ->withInput()
          ->with('fails','Username or password inccorect.');
      }
    } else {
      return Redirect::to('user/login')
        ->withInput()
        ->with('fails','Please fill username or password.');
    }

  }

  public function logout()
  {
    Auth::logout();
    return Redirect::to('/');
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

  public function index()
  {
    // $users = $this->user->
    return View::make('frontend::user.dashboard');
  }

  public function create()
  {
    return View::make('frontend::user.create');
  }

  public function store(CreateUserRequest $request)
  {
    $this->user->create($request->all());
    return Redirect::to('user/login');
  }

  public function show($id)
  {

  }

  public function edit($id)
  {

  }

  public function update($id)
  {

  }

  public function destroy()
  {

  }

}
