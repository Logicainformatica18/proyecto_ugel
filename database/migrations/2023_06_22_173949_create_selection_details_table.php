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
        Schema::create('selection_details', function (Blueprint $table) {
            $table->id();
                $table->string("description");
            $table->string("detail")->nullable();
                  $table->bigInteger('selection_id')->unsigned();
             $table->foreign('selection_id')->references('id')->on('selections');
    $table->unsignedBigInteger('associate_detail_id')->nullable();
                     $table->foreign('associate_detail_id')->references('id')->on('selection_details');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('selection_details');
    }
};
