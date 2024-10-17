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
        Schema::create('survey_clients', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('survey_detail_id')->unsigned();
            $table->foreign('survey_detail_id')->references('id')->on('survey_details');
                 $table->bigInteger('selection_detail_id')->unsigned()->nullable()->onDelete('cascade');;
            $table->foreign('selection_detail_id')->references('id')->on('selection_details')->onDelete('cascade');
            
            $table->bigInteger('client_id')->unsigned()->nullable()->onDelete('cascade');;
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
            $table->string('answer')->nullable();
            $table->json('option')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('survey_clients');
    }
};
