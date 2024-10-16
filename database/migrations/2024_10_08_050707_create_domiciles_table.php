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
        Schema::create('domiciles', function (Blueprint $table) {
            $table->id();
            $table->integer('domicile_number');
            $table->string('tower')->nullable();
            $table->foreignId('condominium_id')->constrained('condominiums');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('domiciles');
    }
};
