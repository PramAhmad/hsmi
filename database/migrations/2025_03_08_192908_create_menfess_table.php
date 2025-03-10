<?php

// Database migrations for Menfess system
// database/migrations/2024_03_09_000001_create_menfess_tables.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Menfess table
        Schema::create('menfess', function (Blueprint $table) {
            $table->id();
            $table->text('content');
            $table->string('sender_name')->nullable(); // Optional for anonymous submissions
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
            $table->string('spotify_link')->nullable(); // For music embedding
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->text('rejection_reason')->nullable();
            $table->foreignId('approved_by')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamp('approved_at')->nullable();
            $table->timestamps();
        });

        // Tags table
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->timestamps();
        });

        // Pivot table for menfess and tags
        Schema::create('menfess_tag', function (Blueprint $table) {
            $table->unsignedBigInteger('menfess_id');            
            $table->unsignedBigInteger('tag_id');
            $table->foreign('menfess_id')->references('id')->on('menfess')->cascadeOnDelete();
            $table->foreign('tag_id')->references('id')->on('tags')->cascadeOnDelete();
        $table->primary(['menfess_id', 'tag_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('menfess_tag');
        Schema::dropIfExists('tags');
        Schema::dropIfExists('menfess');
    }
};