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
        Schema::table('users', function (Blueprint $table) {
            // Ensure to rename 'name' to 'first_name'
            $table->renameColumn('name', 'first_name');
            // Add the new 'last_name' column
            $table->string('last_name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Revert the changes
            $table->renameColumn('first_name', 'name');
            $table->dropColumn('last_name');
        });
    }
};
