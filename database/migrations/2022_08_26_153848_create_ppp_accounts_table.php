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
        Schema::create('ppp_accounts', function (Blueprint $table) {
            $table->string('username', 25)->primary();
            $table->string('password', 25);
            $table->string('profile_id', 25);
            $table->foreign('profile_id')->references('id')->on('profiles');
            $table->foreignId('customer_id')->constrained('customers');
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
        Schema::dropIfExists('ppp_accounts');
    }
};
