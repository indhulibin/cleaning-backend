<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('phone');
            $table->text('email');
            $table->text('type');
            $table->integer('bedroom');
            $table->integer('bathroom');
            $table->text('extraNeeds')->nullable();
            $table->text('requriments')->nullable();
            $table->unsignedBigInteger('time_id');
            $table->foreign('time_id')->references('id')->on('time_slots');
            $table->date('appointment_date');
            $table->boolean('is_booked')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * 
     * 
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
};
