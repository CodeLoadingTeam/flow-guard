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
        Schema::create('resident_domicile', function (Blueprint $table) {
            $table->foreignId('resident_id')
                ->constrained()
                ->cascadeOnDelete();
            
            $table->foreignId('domicile_id')
                ->constrained('domiciles')
                ->cascadeOnDelete();
            
            $table->primary(['resident_id', 'domicile_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resident_domicile');
    }
};
