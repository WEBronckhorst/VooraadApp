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
        Schema::create('kabels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type_id');
            $table->string('subtyp_id');
            $table->string('code');
            $table->string('laenge');
            $table->string('Startoort');
            $table->string('eindpoort');
            $table->string('status');
            $table->string('opmerking');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kabels');
    }
};
