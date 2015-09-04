<?php

namespace Mari\User\Http\Repositories\User;

use Mari\User\Http\Repositories\User\PermissionInterface;
use  Mari\User\Http\Models\Permission;


class PermissionRepository implements PermissionInterface {

  public function can($doing,$module)
  {
    $group = Auth::user()->user_group;

    $permission = Permission::where('group',$group)
      ->where('type',$doing)
      ->where('module',$module)
      ->get();

    if ($permission->count() >= 1) {
      foreach ($permission as $row) {
        $passport = $row->status;
      }

      if ($passport == 1 ) {
        return true;
      } else {
        return false;
      }
    } else {
      return false;
    }
  }


}
