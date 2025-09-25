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
            $table->id(); // BIGINT UNSIGNED
            $table->string('title');
            $table->string('slug')->nullable();
            $table->string('manual_slug')->nullable();
            $table->string('group')->nullable();
            $table->foreignId('parent_id')->nullable()->constrained('navbars')->nullOnDelete();
            $table->integer('order')->default(0);
            $table->string('icon')->nullable();
            $table->string('type')->default('link'); // link | dropdown | mega
            $table->timestamps();
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
