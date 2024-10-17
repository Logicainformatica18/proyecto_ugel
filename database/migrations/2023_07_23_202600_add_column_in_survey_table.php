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
    //     Schema::table('surveys', function (Blueprint $table) {
    // //     $table->engine = 'InnoDB';
    // //    $table->bigInteger('pollster_m')->nullable()->unsigned();
    // // $table->string('pollster_t')->nullable();
    // // $table->bigInteger('pollster_r')->nullable()->unsigned();

    //    $table->foreign(['pollster_m','pollster_t','pollster_r'])
    //          ->references(['model_id','model_type','role_id'])->on('model_has_roles');
    //     });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
   
    }
};
