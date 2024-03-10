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
        Schema::create('documents', function (Blueprint $table) {
            $table->uuid();
            $table->string('identifier');
            $table->integer('version');
            $table->string('category');
            $table->string('status')->default('UPLOAD');
            $table->text('notes')->nullable();
            $table->string('filename');
            $table->timestamp('updated_at');
            $table->string('updated_by');
            $table->timestamp('created_at');
            $table->string('created_by');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
