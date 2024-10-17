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
       // Schema::create('category_courses', function (Blueprint $table) {
            // $table->engine = 'InnoDB';
            // $table->id();
            // $table->bigInteger('category_id')->unsigned();
            // $table->foreign('category_id')->references('id')->on('categories');
            // $table->bigInteger('course_id')->unsigned();
            // $table->foreign('course_id')->references('id')->on('courses');
            // $table->string('description');
            // $table->string('detail')->nullable();
            // $table->timestamps();
       // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_courses');
    }
};
