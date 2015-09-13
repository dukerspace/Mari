<?php

namespace Mari\Post\Http\Controllers;

use Illuminate\Routing\Controller;
use Redirect, View;

class PageController extends Controller
{

  public function home()
  {

  }

  public function page($uri)
  {
    $page = $this->page->show($uri);
    if (count($page) == 0) {
      return Redirect::to('/');
    }
    return View::make('frontend.');
  }

}
