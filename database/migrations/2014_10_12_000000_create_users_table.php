<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->integer('group')->default(0);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('img_url')->nullable();
            $table->integer('gender')->nullable()->comment('男:0 女:1');
            $table->integer('prefecture')->nullable();
            $table->integer('medi_habit')->nullable();
            $table->integer('age')->nullable();
            $table->integer('job')->nullable();
            $table->integer('income')->nullable();
            $table->string('memo', 2000)->nullable();
            $table->timestamp('last_login')->nullable();
            $table->string('tw_id')->nullable();
            $table->string('fb_id')->nullable();
            $table->string('blog_url')->nullable();
            $table->integer('certificate_category')->nullable();
            $table->string('certificate_number')->nullable();
            $table->boolean('pause_flg')->default(0);
            $table->boolean('free_flg')->default(0);
            $table->boolean('del_flg')->default(0);
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
        Schema::dropIfExists('users');
    }
}
