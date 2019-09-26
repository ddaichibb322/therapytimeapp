<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('movie_url', 1000)->nullable();
            $table->string('thumbnail_url', 1000)->nullable();
            $table->string('outline', 2000)->nullable();
            $table->string('caution', 2000)->nullable();
            $table->string('supplement', 2000)->nullable();
            $table->bigInteger('type_id');
            $table->integer('level')->nullable();
            $table->string('memo', 2000)->nullable();
            $table->boolean('no_member_viewable_flg')->default(0)->comment('会員ではないユーザでも閲覧できるかどうか');
            $table->boolean('free_member_viewable_flg')->default(0)->comment('無料会員でも閲覧できるかどうか');
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
        Schema::dropIfExists('contents');
    }
}
