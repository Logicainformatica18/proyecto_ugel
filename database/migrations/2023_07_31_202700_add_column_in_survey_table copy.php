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
        Schema::table('survey_details', function (Blueprint $table) {

              $table->longText('title')->nullable();
               $table->longText('detail_2')->nullable();
              $table->longText('detail_3')->nullable();
              $table->string('evaluate')->default("not");
             $table->string('correct')->nullable();
           
  

 
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
   
    }
};
