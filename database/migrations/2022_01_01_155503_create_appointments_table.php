<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            // $table->string('name');
             $table->integer('user_id');
             $table->string('user_name');
            $table->date('date');
            $table->string('status')->default('pending');
            $table->integer('total_price');
            $table->string('payment_status')->default('pending');
            $table->integer('total_paid')->default('0');
            $table->string('upload_report')->nullable();
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
        Schema::dropIfExists('appointments');
    }
}
