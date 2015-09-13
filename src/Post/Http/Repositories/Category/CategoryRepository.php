<?php

namespace Mari\Category\Http\Repositories;

use Mari\Category\Http\Repositories\CategoryInterface;
use Mari\Category\Http\Models\Category;

class CategoryRepository implements CategoryInterface {

  public function paginate($limit)
  {
    return Post::paginate($limit);
  }

  public function create($data)
  {
    Post::insert($data);
  }

  public function show($id)
  {
    return Post::find($id);
  }

  public function update($id,$data)
  {
    Post::where('post_id',$id)
      ->update($data);
  }

  public function delete($id)
  {
    Post::where('post_id',$id)
      ->delete();
  }

}
