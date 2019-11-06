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
            $table->integer('viewable_flg')->default(0)->comment('0:無料会員すら見れない 1:無料会員は見れる 2:会員じゃなくても見れる');
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
