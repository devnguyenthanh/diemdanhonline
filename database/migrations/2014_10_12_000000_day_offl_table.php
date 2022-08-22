<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('day_off', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('owner_id')->nullable();
            $table->integer('user_name')->nullable();
            $table->integer('class_id');
            $table->dateTime('date', 0);
            $table->time('begin_time', 0);
            $table->time('end_time', 0);
            $table->string('note')->nullable();
            $table->smallInteger('status_code')->default(0)->comment('0: note OK; 1: OK');
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
        Schema::dropIfExists('day_off');
    }
};
