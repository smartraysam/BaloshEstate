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
            $table->tinyInteger('category')->default(0)->comment('0:Access,1:Profile,2:Clearance,3:Technician/contractors; 4:Work permit, 5:Payment, 5:Others');
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