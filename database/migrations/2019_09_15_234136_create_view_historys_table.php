<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViewHistorysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('view_historys', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('content_id');
            $table->bigInteger('user_id');
            $table->integer('view_time')->nullable();
            $table->timestamp('view_at')->nullable();
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
        Schema::dropIfExists('view_historys');
    }
}
