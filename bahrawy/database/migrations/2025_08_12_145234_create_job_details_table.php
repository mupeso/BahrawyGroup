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
        Schema::create('job_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('job_id')->constrained('job_offers')->onDelete("cascade");
            $table->integer('available_positions')->nullable();
            $table->string('category')->nullable();
            $table->string('experience')->nullable();
            $table->string('studies')->nullable();
            $table->string('city')->nullable();
            $table->string('required_languages')->nullable();
            $table->text('requirements')->nullable();
            $table->text('main_functions')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_details');
    }
};
