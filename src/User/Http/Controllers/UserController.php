<?php

namespace Mari\User\Http\Controllers;

use Illuminate\Routing\Controller;
use Auth, Hash, Redirect, Request, Validator, View, Session;

use Mari\User\Http\Repositories\User\UserRepository;
use Mari\User\Http\Request\UserCreateRequest;
use Mari\User\Http\Request\UserUpdateRequest;

class UserController extends Controller {

  public function __construct(UserRepository $userRepo)
  {
    $this->user = $userRepo;
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
        $user = Auth::user();
        Session::put('fisrtname',$user->firstname);
        Session::put('lastname',$user->lastname);
        return Redirect::to('user/dashboard');
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

  public function index()
  {
    $user = $this->user->index();
    return View::make('frontend::user.index')
      ->with('user',$user);
  }

  public function create()
  {
    return View::make('frontend::user.create');
  }

  public function store(UserCreateRequest $request)
  {
    $data = [
      'username' => $request->input('username'),
      'password' => Hash::make($request->input('password')),
      'email' => $request->input('email'),
      'firstname' => $request->input('firstname'),
      'lastname' => $request->input('lastname'),
      'group_id' => 3,
    ];

    $this->user->create($data);
    return Redirect::to('user/login');
  }

  public function show($id)
  {
    $user = $this->user->show($id);
    return View::make('frontend::user.show')
      ->with('user',$user);
  }

  public function edit($id)
  {
    $user = $this->user->show($id);
    return View::make('frontend::user.edit')
      ->with('user',$user);
  }

  public function update($id,UpdateUserRequest $request)
  {
    $password = $request->input('password');
    $email = $request->input('email');
    $firstname = $request->input('firstname');
    $lastname = $request->input('lastname');

    $data = [];
    if (!empty($password)) {
      $data['password'] = $password;
    }

    if (!empty($email)) {
      $data['email'] = $email;
    }

    if (!empty($fistname)) {
      $data['fistname'] = $fistname;
    }

    if (!empty($lastname)) {
      $data['lastname'] = $lastname;
    }

    $this->user->update($id,$data);
    return Redirect::to('user/profile');
  }

  public function destroy()
  {
    $id = Request::input('id');
    $this->user->delete($id);

    return Response::json(['status' => 'success']);
  }

}
