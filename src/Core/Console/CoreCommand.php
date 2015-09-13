<?php

namespace Mari\Core\Console;

use Illuminate\Console\Command;
use Mari\Core\Console\DatabaseConfig;

class CoreCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mira:drive';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install mira.';

    /**
     * Create a new command instance.
     *
     * @return void
     */

    protected $database;
    public function __construct(DatabaseConfig $database)
    {
        parent::__construct();
        $this->database = $database;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
      // $this->database->handle($command);

      \Artisan::call('vendor:publish');
      \Artisan::call('migrate');

      \Artisan::call('db:seed',[
        '--class' => 'UserTableSeeder',
      ]);

      \Artisan::call('db:seed',[
        '--class' => 'PermissionTableSeeder',
      ]);

      \Artisan::call('db:seed',[
        '--class' => 'CategoryTableSeeder',
      ]);

      $this->info('Wellcome to drive on Mira.');
      $this->info('Login: admin');
      $this->info('Password: 123456');
    }
}
