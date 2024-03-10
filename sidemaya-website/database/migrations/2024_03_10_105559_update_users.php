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
            $table->string('role')->default('CITIZEN')->nullable();
            $table->string('nik')->nullable();
            $table->text('address')->nullable();
            $table->string('birth_city')->nullable();
            $table->datetime('birth_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function($table) {
            $table->dropColumn('role');
            $table->dropColumn('nik');
            $table->dropColumn('address');
            $table->dropColumn('birth_city');
            $table->dropColumn('birth_date');
        });
    }
};
