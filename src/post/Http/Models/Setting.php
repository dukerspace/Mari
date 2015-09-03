<?php

namespace Mari\Core\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
  protected $table = 'settings';
  protected $primaryKey = 'setting_id';
  public $timestamps = false;
}
