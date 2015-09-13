<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
              'user_id' => 1,
              'username' => 'admin',
              'password' => \Hash::make('123456'),
              'email' => 'admin@admin.com',
              'firstname' => 'Mira',
              'lastname' => 'Mari',
              'group_id' => 1,
            ],
          ]);
    }
}
