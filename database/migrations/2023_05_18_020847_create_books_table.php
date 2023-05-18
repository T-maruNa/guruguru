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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->text('type');
            $table->text('title');
            $table->text('url')->nullable();
            $table->text('image_url')->nullable();
            $table->text('caption')->nullable();
            $table->date('open_time')->nullable();
            $table->date('close_time')->nullable();
            $table->boolean('member_flg')->default(0);
            $table->boolean('delete_flg')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
