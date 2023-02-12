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
        Schema::create('kabel_baks', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Kabels::class);
            $table->foreignIdFor(\App\Models\Bak::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kabel_baks');
    }
};
