<?php

namespace Mari\Post\Http\Controllers;

use Illuminate\Routing\Controller;
use Redirect, View;

use Mari\Post\Http\Repositories\Category\CategoryRepository;

class PostController extends Controller {

  public function __construct(CategoryRepository $categoryRepo)
  {
    $this->category = $categoryRepo;
  }

  public function index($type)
  {
    $posts = $this->category->paginate($type,$limit);
    return View::make('backend.post.index')
      ->with('posts',$posts);
  }

  public function create()
  {
    return View::make('backend::post.index');
  }

  public function store()
  {
    $data = $request->all();
    $this->category->create($data);
    return Redirect::to('post');
  }

  public function show($id)
  {
    $categories = $this->category->show($id);
    return View::make('backend.post.index')
      ->with('post',$post);
  }

  public function edit($id)
  {
    $categories = $this->category->show($id);
    return View::make('backend.post.index')
      ->with('post',$post);
  }

  public function update()
  {
    $data = $request->all();
    $this->category->update($data);
    return Redirect::to('post');
  }

  public function destroy()
  {
    $id = Request::input('id');
    $this->category->delete($id);
  }

}
