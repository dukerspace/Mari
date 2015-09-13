<?php

namespace Mari\Post\Http\Repositories\Post;

use Mari\Post\Http\Repositories\Post\PostInterface;
use Mari\Post\Http\Models\Post;

class PostRepository implements PostInterface {

  public function paginate($type,$limit)
  {
    return Post::where('category_id',$type)
      ->paginate($limit);
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
