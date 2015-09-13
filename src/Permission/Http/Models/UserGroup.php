<?php

namespace Mari\Permission\Http\Models;

use Illuminate\Database\Eloquent\Model;

class UserGroup extends Model
{
  protected $table = 'user_groups';
  protected $primaryKey = 'group_id';
  public $timestamps = false;
}
