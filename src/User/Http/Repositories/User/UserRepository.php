<?php

namespace Mari\User\Http\Repositories\User;

use Auth;

use Mari\User\Http\Repositories\User\UserInterface;
use Mari\User\Http\Models\User;

class UserRepository implements UserInterface {

  public function paginate($limit)
  {
    return User::paginate($limit);
  }

  public function index()
  {
    $uid = Auth::user()->user_id;
    return User::find($uid);
  }

  public function create($data)
  {
    User::insert($data);
  }

  public function show($id)
  {
    return User::find($id);
  }

  public function update($id,$data)
  {
    User::where('user_id',$id)
      ->update($data);
  }

  public function delete($id)
  {
    User::where('user_id',$id)->delete();
  }

}
