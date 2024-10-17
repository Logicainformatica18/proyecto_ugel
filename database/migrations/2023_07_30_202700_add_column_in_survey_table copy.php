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
        Schema::table('surveys', function (Blueprint $table) {
    //     $table->engine = 'InnoDB';
        $table->string('state')->nullable();
     $table->string('pollster_t')->nullable();
     $table->bigInteger('pollster_r')->nullable()->unsigned();

 
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
   
    }
};
