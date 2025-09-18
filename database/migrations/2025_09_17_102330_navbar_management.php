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
        Schema::create('navbars', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Nama menu
            $table->string('slug')->nullable(); // URL atau #
            $table->unsignedBigInteger('parent_id')->nullable(); // Relasi ke parent
            $table->integer('order')->default(0); // Urutan menu
            $table->boolean('is_active')->default(true); // Bisa aktif/nonaktif
            $table->string('icon')->nullable(); // Icon menu (opsional)


            $table->timestamps();

            // Foreign key untuk parent
            $table->foreign('parent_id')->references('id')->on('navbars')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('navbars');
    }
};
