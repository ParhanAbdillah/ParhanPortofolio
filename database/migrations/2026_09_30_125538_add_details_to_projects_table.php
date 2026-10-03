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
        Schema::table('projects', function (Blueprint $table) {
            $table->string('status')->default('Active');
            $table->string('type')->nullable();
            $table->string('year')->nullable();
            $table->json('tech_stack')->nullable();
            $table->string('access')->default('Private Repo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn(['status', 'type', 'year', 'tech_stack', 'access']);
        });
    }
};
