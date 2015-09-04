<?php

namespace Mari\User\Http\Repositories\User;

interface UserInterface {

  public function paginate($limit);

  public function create($data);

  public function show($id);

  public function update($id,$data);

  public function delete($id);

}
