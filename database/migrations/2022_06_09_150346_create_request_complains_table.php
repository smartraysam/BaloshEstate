<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestComplainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_complains', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('manager_user_id')->nullable();
            $table->string('subject')->nullable();
            $table->longText('request')->nullable();
            $table->tinyInteger('status')->default(0)->comment('0:pending, 1: processing, 2: resolved');
            $table->tinyInteger('category')->default(0)->comment('1:Access,2:Payment;3:Profile,4:Clearance,5:Technician/contractors; 6:Work permit, 7:Others');
            $table->boolean('isread')->default(0)->comment('0: unread, 1: read');
            $table->string('attachfile')->nullable()->default('none');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('request_complains');
    }
}