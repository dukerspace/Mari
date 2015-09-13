<?php

namespace Mari\Post\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $table = 'categories';
  protected $primaryKey = 'category_id';
  public $timestamps = false;
}
