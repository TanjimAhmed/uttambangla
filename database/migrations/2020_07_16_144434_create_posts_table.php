<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('name');
            $table->string('work');
            $table->string('education');
            $table->string('profile_image')->nullable();
            $table->string('company_name');
            $table->string('from');
            $table->string('to');
            $table->string('department');
            $table->string('company_location');
            $table->string('position');
            $table->mediumText('duty');
            $table->mediumText('language');
            $table->string('location');
            $table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
