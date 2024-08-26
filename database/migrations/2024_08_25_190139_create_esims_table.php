<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEsimsTable extends Migration
{
    public function up()
    {
        Schema::create('esims', function (Blueprint $table) {
            $table->id();
            $table->string('uid')->unique();
            $table->string('iccid')->unique();
            $table->string('apn');
            $table->string('manual_code');
            $table->string('smdp_address');
            $table->dateTime('date_assigned');
            $table->string('network_status');
            $table->string('service_status');
            $table->string('activation_code');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('esims');
    }
}

