<?php

namespace Mari\Core\Http\Controllers;

use Illuminate\Routing\Controller;
use View;

class BackendController extends Controller
{
  public function index()
  {
    return View::make('backend::dashboard.index');
  }
}
