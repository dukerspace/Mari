<?php

namespace Mari\Core\Http\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
  protected $table = 'files';
  protected $primaryKey = 'file_id';
  public $timestamps = false;
}
