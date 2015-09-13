<?php

namespace Mari\Permission\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
  protected $table = 'permissions';
  protected $primaryKey = 'permission_id';
  public $timestamps = false;
}
