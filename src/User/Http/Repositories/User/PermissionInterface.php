<?php

namespace Mari\User\Http\Repositories\User;

interface PermissionInterface {

  public function can($doing,$module);

}
