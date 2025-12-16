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
        // Add image and category to posts
        if (Schema::hasTable('posts')) {
            Schema::table('posts', function (Blueprint $table) {
                if (!Schema::hasColumn('posts', 'image')) {
                    $table->string('image')->nullable()->after('content');
                }
                if (!Schema::hasColumn('posts', 'category')) {
                    $table->string('category')->nullable()->after('image');
                }
            });
        }

        // Add image and category to realisations
        if (Schema::hasTable('realisations')) {
            Schema::table('realisations', function (Blueprint $table) {
                if (!Schema::hasColumn('realisations', 'image')) {
                    $table->string('image')->nullable()->after('media');
                }
                if (!Schema::hasColumn('realisations', 'category')) {
                    $table->string('category')->nullable()->after('image');
                }
            });
        }

        // Add image and category to offres
        if (Schema::hasTable('offres')) {
            Schema::table('offres', function (Blueprint $table) {
                if (!Schema::hasColumn('offres', 'image')) {
                    $table->string('image')->nullable()->after('price');
                }
                if (!Schema::hasColumn('offres', 'category')) {
                    $table->string('category')->nullable()->after('image');
                }
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('posts')) {
            Schema::table('posts', function (Blueprint $table) {
                $table->dropColumn(['image', 'category']);
            });
        }

        if (Schema::hasTable('realisations')) {
            Schema::table('realisations', function (Blueprint $table) {
                $table->dropColumn(['image', 'category']);
            });
        }

        if (Schema::hasTable('offres')) {
            Schema::table('offres', function (Blueprint $table) {
                $table->dropColumn(['image', 'category']);
            });
        }
    }
};
