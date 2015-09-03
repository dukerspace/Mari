<?php

namespace Dukerspace\Core\Http\Repositories;

interface PostInterface {

  public function paginate();

  public function create();

  public function show();

  public function update();

  public function delete();

}
