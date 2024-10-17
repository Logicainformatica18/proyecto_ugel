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
        Schema::create('selections', function (Blueprint $table) {
            $table->id();
               $table->string("description");
            $table->string("detail")->nullable();
              $table->string("state")->nullable();
               $table->unsignedBigInteger('associate_id')->nullable();
            $table->timestamps();
            $table->foreign('associate_id')->references('id')->on('selections');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('selections');
    }
};
