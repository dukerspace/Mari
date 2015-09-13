<?php

namespace Mari\Core\Console;

use Illuminate\Console\Command;
use Illuminate\Contracts\Config\Repository as Config;
use Mari\Core\Console\CreateEnv;

class DatabaseConfig extends Command
{

    protected $signature = 'mira:setUp';
    protected $description = 'Install mira.';

    protected $command;
    protected $config;
    protected $env;

    public function __construct(Config $config, CreateEnv $env)
    {
        parent::__construct();
        $this->config = $config;
        $this->env = $env;
    }

    public function handle(Command $command)
    {
      $this->command = $command;
      
      $host = $this->askHost();
      $name = $this->askDatabaseName();
      $user = $this->askDatabaseUsername();
      $password = $this->askDatabasePassword();

      $this->configuration($name, $user, $password, $host);
      $this->env->write($name, $user, $password, $host);
      $command->info('Database successfully configured');
    }

    protected function askHost()
    {
      $host = $this->command->ask('Enter your database host', 'localhost');
      return $host;
    }

    protected function askDatabaseName()
    {
      do {
        $name = $this->command->ask('Enter your database name');
        if ($name == '') {
          $this->command->error('Database name is required');
        }
      } while (!$name);
      return $name;
    }

    protected function askDatabaseUsername()
    {
      do {
        $user = $this->command->ask('Enter your database username', 'root');
        if ($user == '') {
          $this->command->error('Database username is required');
        }
      } while (!$user);
      return $user;
    }

    protected function askDatabasePassword()
    {
      $databasePassword = $this->command->ask('Enter your database password (leave <none> for no password)', '<none>');
      return ($databasePassword === '<none>') ? '' : $databasePassword;
    }

    protected function configuration($name, $user, $password, $host)
    {
        $this->config['database.connections.mysql.host'] = $host;
        $this->config['database.connections.mysql.database'] = $name;
        $this->config['database.connections.mysql.username'] = $user;
        $this->config['database.connections.mysql.password'] = $password;
    }
}
