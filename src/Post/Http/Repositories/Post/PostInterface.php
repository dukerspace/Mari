<?php

namespace Mari\Post\Http\Repositories\Post;

interface PostInterface {

  public function paginate($type,$limit);

  public function create($data);

  public function show($id);

  public function update($id,$data);

  public function delete($id);

}
