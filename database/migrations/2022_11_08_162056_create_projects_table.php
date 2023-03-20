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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('compound');
            $table->float('size');
            $table->integer('floors');
            $table->float('occupation');
            $table->float('maintanence_fee');
            $table->float('parking_fee');
            $table->string('status');
            $table->date('delivery_date');
            $table->float('downpaynment');
            $table->float('delivery');
            $table->string('offers');
            $table->float('cash_discount');
            $table->string('politics');
            $table->enum('updated', ['true', 'false']);
          
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
        Schema::dropIfExists('projects');
    }
};
