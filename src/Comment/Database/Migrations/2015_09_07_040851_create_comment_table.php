<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('comments',function($t){
        $t->increments('comment_id');
        $t->integer('post_id');
        $t->text('comment');
        $t->integer('comment_status');
        $t->integer('user_id');
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
      Schema::drop('comments');
    }
}
