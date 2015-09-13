<?php

namespace Mari\Permission\Http\Repositories;

Interface PermissionInterface {

  public function can($group,$role,$module);

}
