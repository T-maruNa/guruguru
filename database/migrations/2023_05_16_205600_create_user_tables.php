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
        /*
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('user_name');
            $table->string('password');
            $table->timestamps();
        });
        */
    }
    /**
     * insert into `users` (`user_id`, `user_name`, `password`, `updated_at`, `created_at`) values ('test', 'テストユーザー', '$2y$10$kYOuub7VLWOiH1KrP2qGr.2gWovFDt.ZiQKRgujQvr1WiRExyOvdq', '2023-05-16 21:14:26', '2023-05-16 21:14:26');
     */
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
