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
        Schema::create('pickup_points', function (Blueprint $table) {
            $table->id();
            $table->string('pickup_point_type', 15);
            $table->foreign('pickup_point_type')->references('type')->on('pickup_point_models');
            $table->foreignId('olt_id')->constrained('olts');
            $table->string('port_number', 6);
            $table->string('longitude', 21);
            $table->string('latitude', 21);
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
        Schema::dropIfExists('pickup_points');
    }
};
