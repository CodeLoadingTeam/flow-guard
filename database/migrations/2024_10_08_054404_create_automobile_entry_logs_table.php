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
        Schema::create('automobile_entry_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('automobile_id')->constrained();
            $table->enum('action', ['in', 'out']);
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('automobile_entry_logs');
    }
};
