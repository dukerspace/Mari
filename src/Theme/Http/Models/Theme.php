<?php

namespace Mari\Theme\Http\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
  protected $table = 'users';
  protected $primaryKey = 'user_id';
  public $timestamps = true;

  protected $fillable = ['username', 'email', 'firstname','lastname'];

  protected $hidden = ['password', 'remember_token'];
}
