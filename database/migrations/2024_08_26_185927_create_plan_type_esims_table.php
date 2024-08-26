<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanTypeEsimsTable extends Migration
{
    public function up()
    {
        Schema::create('plan_type_esims', function (Blueprint $table) {
            $table->id();
            $table->foreignId('plan_type_id')->constrained('plan_types')->onDelete('cascade');
            $table->foreignId('esim_id')->constrained('esims')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('plan_type_esims');
    }
}
