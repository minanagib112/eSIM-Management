<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanTypesTable extends Migration
{
    public function up()
    {
        Schema::create('plan_types', function (Blueprint $table) {
            $table->id();
            $table->string('uid')->unique();
            $table->string('name');
            $table->unsignedBigInteger('policy_id');
            $table->string('policy_name');
            $table->unsignedBigInteger('data_quota_bytes');
            $table->integer('validity_days');
            $table->json('countries_enabled');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('plan_types');
    }
}

