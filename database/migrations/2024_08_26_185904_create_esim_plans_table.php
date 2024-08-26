<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEsimPlansTable extends Migration
{
    public function up()
    {
        Schema::create('esim_plans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('esim_id')->constrained('esims')->onDelete('cascade');
            $table->string('plan_id');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->dateTime('date_activated');
            $table->string('network_status');
            $table->unsignedBigInteger('data_quota_bytes');
            $table->unsignedBigInteger('data_bytes_remaining');
            $table->json('countries_enabled');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('esim_plans');
    }
}
