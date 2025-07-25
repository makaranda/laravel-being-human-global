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
        Schema::table('program_sub_categories', function (Blueprint $table) {
            $table->dropColumn('country');
            $table->string('slug')->after('name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('program_sub_categories', function (Blueprint $table) {
            $table->dropColumn('slug');
            $table->string('country')->after('name');
        });
    }
};
