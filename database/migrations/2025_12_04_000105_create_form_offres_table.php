<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('form_offres', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->unsignedBigInteger('offre_id')->nullable();
            $table->unsignedBigInteger('pack_id')->nullable();
            $table->unsignedBigInteger('salary')->nullable();
            $table->text('message')->nullable();
            $table->timestamps();

            $table->foreign('offre_id')->references('id')->on('offres')->onDelete('set null');
            $table->foreign('pack_id')->references('id')->on('packs')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('form_offres');
    }
};
