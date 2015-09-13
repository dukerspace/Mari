<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('posts',function($t){
        $t->increments('post_id');
        $t->string('title');
        $t->text('body');
        $t->integer('category_id');
        $t->integer('user_id');
        $t->integer('post_status');
        $t->integer('post_comment');
        $t->integer('post_parent');
        $t->string('langauge');
        $t->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
