<?php

namespace Mari\Comment\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  protected $table = 'comments';
  protected $primaryKey = 'comment_id';
  public $timestamps = true;
}
