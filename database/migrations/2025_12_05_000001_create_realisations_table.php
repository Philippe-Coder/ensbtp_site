<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // If the table already exists (e.g. created previously), skip creation
        if (! Schema::hasTable('realisations')) {
            Schema::create('realisations', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->string('slug')->unique();
                $table->string('excerpt')->nullable();
                $table->longText('content')->nullable();
                $table->json('media')->nullable();
                $table->timestamp('published_at')->nullable();
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('realisations');
    }
};
