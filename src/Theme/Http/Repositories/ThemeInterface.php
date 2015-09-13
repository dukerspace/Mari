<?php

namespace Mari\Theme\Http\Repositories;

Interface ThemeInterface {

  public function getList();

  public function getBackend();

  public function getFrontend();

}
