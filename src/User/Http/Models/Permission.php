<?php

namespace Mari\User\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
  protected $table = 'permission';
  protected $primaryKey = 'permission_id';
  public $timestamps = false;
}
