<?php

namespace Mari\Core\Http\Controllers\Backend;

namespace Mari\User\Http\Repositories\User\PermissionRepository;

class PermissionController {

  public function __construct(PermissionRepository $permission)
  {
    $this->permission = $permission;
  }

  public function can($doing,$module)
  {
    return $this->permission->can($doing,$module);
  }

}
