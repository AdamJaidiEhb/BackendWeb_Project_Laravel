<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('role')->default('user'); // 'user' or 'admin'
            $table->string('username')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('profile_picture')->nullable();
            $table->text('about_me')->nullable();
            $table->text('favorite_anime')->nullable();
            $table->timestamp('email_verified_at')->nullable(); // Ajouté ici
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
