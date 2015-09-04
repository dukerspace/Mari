<?php

namespace Mari\User\Http\Repositories\User;

use Hash;
use Mari\User\Http\Repositories\User\UserInterface;
use Mari\User\Http\Models\User;

class UserRepository implements UserInterface {

  public function paginate($limit)
  {

  }

  public function create($data)
  {
    $data['user_group'] = 2;
    $data['password'] = Hash::make($data['password']);
    User::insert($data);
  }

  public function show($id)
  {

  }

  public function update($id,$data)
  {

  }

  public function delete($id)
  {

  }

}
