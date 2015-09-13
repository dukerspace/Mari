<?php

namespace Mari\Theme\Http\Repositories;

use Mari\Theme\Http\Repositories\ThemeInterface;
use Mari\Core\Http\Models\Setting;

class ThemeRepository implements ThemeInterface {

  public function getList()
  {

  }

  public function getBackend()
  {
    // $backend = Setting::where('setting_name','theme_backend')
    //   ->get();
    //
    // foreach ($backend as $theme) {
    //   return $theme->setting_value;
    // }
    return 'backend';
  }

  public function getFrontend()
  {
    // $frontend = Setting::where('setting_name','theme_frontend')
    //   ->get();
    //
    // foreach ($frontend as $theme) {
    //   return $theme->setting_value;
    // }
    return 'frontend';
  }

}
