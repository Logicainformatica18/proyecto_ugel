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
        Schema::create('survey_details', function (Blueprint $table) {
            $table->id();
                        $table->bigInteger('survey_id')->unsigned();
            $table->foreign('survey_id')->references('id')->on('surveys');

               $table->bigInteger('selection_id')->unsigned()->nullable();
            $table->foreign('selection_id')->references('id')->on('selections');

                   $table->string('question');
                   $table->string('type');
                     $table->json('option')->nullable();
                    $table->string('requerid')->nullable();
            $table->string('state')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('survey_details');
    }
};
