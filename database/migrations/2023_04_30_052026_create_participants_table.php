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
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('event_id')->unsigned();
            $table->foreign('event_id')->references('id')->on('events');
            $table->string("dni",9);
            $table->string("firstname");
            $table->string("lastname");
            $table->string("names");
            $table->string("password");
            $table->date("datebirth");
            $table->string("cellphone",20);
            $table->longText("photo")->nullable();
            $table->string("sex",1);
            $table->string('email',100)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participants');
    }
};
