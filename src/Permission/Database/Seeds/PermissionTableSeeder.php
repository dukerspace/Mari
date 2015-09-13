<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PermissionTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('user_groups')->insert([
            [
              'group_id' => 1,
              'group_name' => 'Administrator',
            ],
            [
              'group_id' => 2,
              'group_name' => 'Editor',
            ],
            [
              'group_id' => 3,
              'group_name' => 'User',
            ],
          ]);
    }
}
