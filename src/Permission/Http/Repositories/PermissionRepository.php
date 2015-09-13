<?php

namespace Mari\Permission\Http\Repositories;

use Auth;

use Mari\Permission\Http\Repositories\PermissionInterface;
use Mari\Permission\Http\Models\UserGroup;
use Mari\Permission\Http\Models\Permission;

class PermissionRepository implements PermissionInterface{

  public function can($group,$role,$module)
  {
    $permissions = Permission::where('group_id',$group)
      ->where('role',$role)
      ->where('module_slug',$module)
      ->get();

    foreach ($permissions as $permission) {
      if ($permission->permission_status == 1) {
        return true;
      } else {
        return false;
      }
    }
  }

}
