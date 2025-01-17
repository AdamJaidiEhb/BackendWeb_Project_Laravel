<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'username')) {
                $table->string('username')->nullable();
            }

            if (!Schema::hasColumn('users', 'profile_picture')) {
                $table->string('profile_picture')->nullable();
            }

            if (!Schema::hasColumn('users', 'about_me')) {
                $table->text('about_me')->nullable();
            }

            if (!Schema::hasColumn('users', 'favorite_anime')) {
                $table->text('favorite_anime')->nullable();
            }
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['username', 'profile_picture', 'about_me', 'favorite_anime']);
        });
    }
};
