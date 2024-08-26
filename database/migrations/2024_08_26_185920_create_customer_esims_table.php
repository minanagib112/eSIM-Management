<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerEsimsTable extends Migration
{
    public function up()
    {
        Schema::create('customer_esims', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('customers')->onDelete('cascade');
            $table->foreignId('esim_id')->constrained('esims')->onDelete('cascade');
            $table->string('state');
            $table->string('manual_code');
            $table->dateTime('date_assigned');
            $table->string('network_status');
            $table->string('service_status');
            $table->string('activation_code');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('customer_esims');
    }
}
