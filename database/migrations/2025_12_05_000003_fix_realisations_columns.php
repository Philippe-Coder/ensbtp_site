<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        if (! Schema::hasTable('realisations')) {
            return;
        }

        Schema::table('realisations', function (Blueprint $table) {
            if (! Schema::hasColumn('realisations', 'excerpt')) {
                $table->string('excerpt')->nullable();
            }
            if (! Schema::hasColumn('realisations', 'content')) {
                $table->longText('content')->nullable();
            }
            if (! Schema::hasColumn('realisations', 'media')) {
                $table->json('media')->nullable();
            }
            if (! Schema::hasColumn('realisations', 'published_at')) {
                $table->timestamp('published_at')->nullable();
            }
            if (! Schema::hasColumn('realisations', 'slug')) {
                $table->string('slug')->nullable();
            }
        });
    }

    public function down()
    {
        if (! Schema::hasTable('realisations')) {
            return;
        }

        Schema::table('realisations', function (Blueprint $table) {
            if (Schema::hasColumn('realisations', 'excerpt')) {
                $table->dropColumn('excerpt');
            }
            if (Schema::hasColumn('realisations', 'content')) {
                $table->dropColumn('content');
            }
            if (Schema::hasColumn('realisations', 'media')) {
                $table->dropColumn('media');
            }
            if (Schema::hasColumn('realisations', 'published_at')) {
                $table->dropColumn('published_at');
            }
            // Do not drop slug in down to avoid accidental data loss if used elsewhere
        });
    }
};
