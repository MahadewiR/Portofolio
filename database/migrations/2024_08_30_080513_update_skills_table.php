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
        Schema::table('skills', function (Blueprint $table) {
            $table->dropColumn('soft_skill');
            $table->dropColumn('hard_skill');
            $table->string('nama_skills')->after('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('skills', function (Blueprint $table) {
            $table->string('soft_skill')->after('id');
            $table->string('hard_skill')->after('soft_skill');
            $table->dropColumn('nama_skills');
        });
    }
};
