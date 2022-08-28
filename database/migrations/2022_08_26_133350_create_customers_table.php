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
        Schema::create('customers', function (Blueprint $table) {
            $table->integer("id")->primary();
            $table->string("name", 100);
            $table->string("nik");
            $table->string("phone", 20)->unique("phone");
            $table->string("address", 255);
            $table->string("longitude", 21);
            $table->string('latitude', 21);
            // $table->foreignId('router_customer_id')->constrained('router_customers');
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
        Schema::dropIfExists('customers');
    }
};
