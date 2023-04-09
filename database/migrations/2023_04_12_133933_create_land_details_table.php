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
        Schema::create('land_details', function (Blueprint $table) {
            $table->id();
            $table->string('land_name');
            $table->string('land_size');
            $table->string('plan_number');
            $table->date('plan_date');
            $table->string('plan_plot_number');
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
        Schema::dropIfExists('land_details');
    }
};
