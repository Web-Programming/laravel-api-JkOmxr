<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('donaturs', function (Blueprint $table) {
            $table->id();
            $table->double('amount');
            $table->unsignedBigInteger('funding_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('funding_id')->references('id')->on('fundings');
            $table->foreign('user_id')->references('id')->on('users'); //donatur
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donaturs');
    }
};
