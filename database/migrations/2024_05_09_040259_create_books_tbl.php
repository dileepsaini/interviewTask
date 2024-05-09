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
        Schema::create('books_tbl', function (Blueprint $table) {
            $table->id();
            $table->string('book_name');
            $table->string('author_name');
            $table->text('content');
            $table->string('front_img');
            $table->string('back_img');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books_tbl');
    }
};
