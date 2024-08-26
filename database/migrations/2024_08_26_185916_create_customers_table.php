<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id(); // This creates an auto-incrementing unsigned bigint column named 'id'
            $table->string('tag');
            $table->string('email');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone_mobile');
            $table->string('country');
            $table->string('org_name');
            $table->string('org_url');
            $table->timestamps(); // This adds 'created_at' and 'updated_at' columns
        });
    }

    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
