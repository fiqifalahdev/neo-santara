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
        Schema::create('router_customers', function (Blueprint $table) {
            $table->id();
            $table->foreignId("pickup_point_id")->constrained('pickup_points');
            $table->string('router_model_id');
            $table->foreign("router_model_id")->references('router_model')->on('router_models');
            $table->integer("port_number");
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
        Schema::dropIfExists('router_customers');
    }
};
