<?php

namespace Mari\Block\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
  protected $table = 'blocks';
  protected $primaryKey = 'block_id';
  public $timestamps = false;
}
