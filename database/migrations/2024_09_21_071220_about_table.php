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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('userId')->constrained('users')->onDelete('cascade');
            $table->string('profile')->nullable();
            $table->string('phone')->nullable(); 
            $table->string('image')->nullable();
            $table->text('about')->nullable();
            $table->text('address')->nullable();
            $table->text('xId')->nullable();
            $table->text('facebookId')->nullable();
            $table->text('instagramId')->nullable();
            $table->text('linkedInId')->nullable();
            $table->text('githubId')->nullable();
            $table->boolean('isDeleted')->default(0);
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about');
    }
};
