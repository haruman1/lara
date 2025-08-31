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
        Schema::create('post_blog', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategori_blog_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->text('content');
            $table->string('thumbnail')->nullable();
            $table->string('author')->nullable();
            $table->enum('status', ['draft', 'reviewing', 'published', 'rejected', 'archived'])->default('draft');
            $table->timestamps();
            $table->softDeletes(); // kolom deleted_at untuk SoftDeletes
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_blog');
    }
};
