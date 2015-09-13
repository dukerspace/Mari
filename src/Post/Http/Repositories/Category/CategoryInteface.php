<?php

namespace Mari\Category\Http\Repositories;

interface CategoryInterface {

  public function paginate($limit);

  public function create($data);

  public function show($id);

  public function update($id,$data);

  public function delete($id);

}
