<?php

namespace Mari\Core\Console;

use Dotenv;
use Illuminate\Filesystem\Filesystem;

class CreateEnv
{

  private $finder;

  protected $search = [
    "DB_HOST = localhost",
    "DB_DATABASE = homestead",
    "DB_USERNAME = homestead",
    "DB_PASSWORD = secret",
  ];

  protected $template = '.env.example';
  protected $file = '.env';

  public function __construct(Filesystem $finder)
  {
      $this->finder = $finder;
  }

  public function write($name, $username, $password, $host)
  {
    Dotenv::makeMutable();

    $environmentFile = $this->finder->get($this->template);

    $replace = [
      "DB_HOST = $host",
      "DB_DATABASE = $name",
      "DB_USERNAME = $username",
      "DB_PASSWORD = $password",
    ];

    $newEnvironmentFile = str_replace($this->search, $replace, $environmentFile);
    $this->finder->put($this->file, $newEnvironmentFile);

    Dotenv::makeImmutable();
  }
}
