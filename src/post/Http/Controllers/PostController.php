<?php

namespace Mari\Post\Http\Controllers;

use Illuminate\Routing\Controller;
use Redirect, View;

use Mari\Post\Http\Repositories\Post\PostRepository;

class PostController extends Controller {

  public function __construct(PostRepository $postRepo)
  {
    $this->post = $postRepo;
  }

  public function index($type = null)
  {
    $posts = $this->post->paginate($type,10);
    return View::make('backend::post.index')
      ->with('posts',$posts);
  }

  public function create()
  {
    return View::make('backend::post.create');
  }

  public function store()
  {
    $data = $request->all();
    $this->post->create($data);
    return Redirect::to('post');
  }

  public function show($id)
  {
    $post = $this->post->show($id);
    return View::make('backend.post.index')
      ->with('post',$post);
  }

  public function edit($id)
  {
    $post = $this->post->show($id);
    return View::make('backend.post.index')
      ->with('post',$post);
  }

  public function update()
  {
    $data = $request->all();
    $this->post->update($data);
    return Redirect::to('post');
  }

  public function destroy()
  {
    $id = Request::input('id');
    $this->post->delete($id);
  }

}
