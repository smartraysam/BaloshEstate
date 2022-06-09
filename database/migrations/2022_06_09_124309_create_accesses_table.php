<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accesses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('name', 100)->nullable();
            $table->string('phonenumber', 100)->nullable();
            $table->string('access_code')->nullable();
            $table->smallInteger('status')->default(1)->comment('1:active,2:used;3:expire;4:cancelled');
            $table->integer('valid_period')->default(24);
            $table->smallInteger('type')->nullable()->default(1)->comment('1:visitor,2:regular,3:group,4:future,5:constrution');
            $table->dateTime('use_time')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('accesses');
    }
}